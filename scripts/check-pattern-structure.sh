#!/usr/bin/env bash

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

cd "$ROOT_DIR"

status=0

while IFS= read -r pattern_dir; do
  category="$(basename "$(dirname "$pattern_dir")")"
  pattern="$(basename "$pattern_dir")"

  if [[ ! -f "${pattern_dir}/README.md" ]]; then
    echo "Missing README: ${pattern_dir}/README.md"
    status=1
  fi

  if [[ ! -d "test/${category}/${pattern}" ]]; then
    echo "Missing test directory: test/${category}/${pattern}"
    status=1
  fi
done < <(find src -mindepth 2 -maxdepth 2 -type d | sort)

exit "$status"
