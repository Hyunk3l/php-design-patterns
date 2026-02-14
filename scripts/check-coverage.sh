#!/usr/bin/env bash

set -euo pipefail

MIN_COVERAGE="${1:-70}"
CLOVER_FILE="${2:-coverage/clover.xml}"

if [[ ! -f "$CLOVER_FILE" ]]; then
  echo "Coverage file not found: $CLOVER_FILE"
  exit 1
fi

read -r COVERED STATEMENTS < <(
  php -r '
    $file = $argv[1];
    $xml = @simplexml_load_file($file);
    if ($xml === false) {
      fwrite(STDERR, "Could not parse coverage XML: $file\n");
      exit(1);
    }

    $metrics = $xml->xpath("//metrics[@statements and @coveredstatements]");
    if ($metrics === false || count($metrics) === 0) {
      fwrite(STDERR, "No coverage metrics found in $file\n");
      exit(1);
    }

    $covered = -1;
    $statements = -1;

    foreach ($metrics as $node) {
      $nodeStatements = (int) $node["statements"];
      $nodeCovered = (int) $node["coveredstatements"];

      if ($nodeStatements > $statements) {
        $statements = $nodeStatements;
        $covered = $nodeCovered;
      }
    }

    if ($statements <= 0) {
      fwrite(STDERR, "Invalid coverage statement count in $file\n");
      exit(1);
    }

    echo $covered . " " . $statements . PHP_EOL;
  ' "$CLOVER_FILE"
)

if [[ -z "$STATEMENTS" || -z "$COVERED" || "$STATEMENTS" -eq 0 ]]; then
  echo "Invalid coverage metrics in $CLOVER_FILE"
  exit 1
fi

PERCENT="$(awk -v c="$COVERED" -v s="$STATEMENTS" 'BEGIN { printf "%.2f", (c / s) * 100 }')"

echo "Coverage: ${PERCENT}% (min ${MIN_COVERAGE}%)"

if awk -v p="$PERCENT" -v m="$MIN_COVERAGE" 'BEGIN { exit !(p < m) }'; then
  echo "Coverage below threshold."
  exit 1
fi
