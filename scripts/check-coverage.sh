#!/usr/bin/env bash

set -euo pipefail

MIN_COVERAGE="${1:-70}"
CLOVER_FILE="${2:-coverage/clover.xml}"

if [[ ! -f "$CLOVER_FILE" ]]; then
  echo "Coverage file not found: $CLOVER_FILE"
  exit 1
fi

METRICS_LINE="$(grep -m1 '<metrics ' "$CLOVER_FILE" || true)"

if [[ -z "$METRICS_LINE" ]]; then
  echo "Could not read metrics from $CLOVER_FILE"
  exit 1
fi

STATEMENTS="$(echo "$METRICS_LINE" | sed -n 's/.*statements="\([0-9]*\)".*/\1/p')"
COVERED="$(echo "$METRICS_LINE" | sed -n 's/.*coveredstatements="\([0-9]*\)".*/\1/p')"

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
