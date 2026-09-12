#!/usr/bin/env bash
# ==============================================================================
# 🔨 Precompile All Quarto Drafts
# Renders the entire drafts website into static HTML in _site with freeze caching.
# Run this whenever you add new articles or want to update the precompiled cache.
# ==============================================================================

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
cd "$DIR"

echo "======================================================================"
echo "🔨 Starting Precompilation of Quarto Drafts..."
echo "❄️  Freeze caching enabled in _freeze/"
echo "======================================================================"

quarto render

echo "======================================================================"
echo "✅ Precompilation complete! Launch instantly with ./serve_drafts.sh"
echo "======================================================================"
