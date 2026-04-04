#!/usr/bin/env bash
# bin/dump-content.sh
#
# Dumps all published post/page content from WordPress DB into a static HTML
# file that Tailwind's content scanner can read during the build step.
#
# Usage: run automatically via `npm run build` or `npm run dev`
# Also safe to run manually: bash bin/dump-content.sh

set -e

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
THEME_DIR="$(dirname "$SCRIPT_DIR")"
# Walk up to WP root (themes/caraccidentclinicmiami → themes → wp-content → root)
WP_ROOT="$(dirname "$(dirname "$(dirname "$THEME_DIR")")")"
OUTPUT="$SCRIPT_DIR/content-scan.html"

WPCLI="/usr/local/bin/wp"

echo "Dumping WordPress post content to bin/content-scan.html..."

PHP_INI_SCAN_DIR=/etc/php/8.3/cli/conf.d \
php8.3 "$WPCLI" --allow-root \
  --path="$WP_ROOT" \
  post list \
  --post_status=publish,draft \
  --post_type=page,post,wp_template,wp_template_part,wp_block,wp_navigation \
  --fields=post_content \
  --format=json 2>/dev/null \
  | php8.3 -r '
    $rows = json_decode(stream_get_contents(STDIN), true) ?: [];
    foreach ($rows as $row) { echo $row["post_content"] . "\n"; }
  ' > "$OUTPUT"

echo "Done — $(wc -l < "$OUTPUT") lines written to bin/content-scan.html"
