#!/usr/bin/env bash
# ==============================================================================
# 🚀 Instant Precompiled Quarto Drafts Server
# Serves the precompiled _site directory on http://localhost:4200 with ZERO lag.
# No need to wait for 500+ articles to compile on page load.
# ==============================================================================

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
cd "$DIR"

PORT=4200

# Check if _site exists
if [ ! -d "_site" ] || [ ! -f "_site/index.html" ]; then
  echo "⚠️  _site directory is not yet fully compiled."
  echo "Running precompilation now..."
  quarto render
fi

echo "======================================================================"
echo "⚡ PRECOMPILED DRAFTS SERVER READY (Zero Wait Time)"
echo "📍 Local URL: http://localhost:${PORT}"
echo "📚 All 500+ articles are pre-rendered and served instantly from _site/"
echo "🛑 Press Ctrl+C to stop the server"
echo "======================================================================"

python3 -m http.server "${PORT}" --directory _site
