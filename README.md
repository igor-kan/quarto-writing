# Quarto Writing — Companion Drafts Repository

This is the private companion and drafts repository for Igor Kan's personal and technical blog, powered by [Quarto](https://quarto.org/). It houses all in-progress essays, computational physics explorations, CUDA simulations, long-form literature analyses, and private research notes across 500+ articles.

---

## ⚡ Precompilation & Instant Serving Architecture

With over 500 articles and intensive computational physics notebooks (featuring Python, NumPy, SciPy, and Matplotlib simulations), standard `quarto preview` incurs significant latency attempting to evaluate kernels and compile documents on-demand. 

To eliminate loading times and provide sub-millisecond local browsing, this repository utilizes an **ahead-of-time precompiled static architecture**.

### 1. How It Is Precompiled

The precompilation workflow consists of three integrated systems configured in `_quarto.yml`:

* **Freeze Cache (`execute.freeze: auto`)**:
  Quarto caches all computational kernel execution results inside the `_freeze/` directory. Once a Python simulation or figure is rendered, its output is frozen. Unmodified files are never re-executed during subsequent builds, dropping re-compilation time from 10+ minutes to mere seconds.
* **Draft Visibility (`website.draft-mode: visible`)**:
  In standard Quarto production mode, articles with `draft: true` are stripped down to 90-byte blank placeholder stubs. In this drafts repository, `draft-mode: visible` instructs the compiler to render all draft documents into complete, searchable, and fully-styled HTML files within `_site/`.
* **Ahead-of-Time Static Bundle (`_site/`)**:
  Running `./precompile_drafts.sh` (or `quarto render`) renders the entire site, builds the full client-side search index (`_site/search.json`), and generates category listing pages ahead of time.

---

## 🚀 Instant Local Preview (Zero Wait Time)

To view the complete drafts blog with zero compile lag:

```bash
cd /home/igorkan/repos/quarto-writing-drafts
./serve_drafts.sh
```

Then open **[http://localhost:4200](http://localhost:4200)** in your web browser.

* **Sub-millisecond loading**: Pages are served statically directly from the precompiled `_site/` directory via Python's HTTP server.
* **Instant global search**: Query any topic across all 500+ articles immediately via the search bar.
* **Zero build queues**: No compilation takes place during browsing.

---

## 🔨 Authoring & Incremental Precompilation

When adding new content or editing existing articles, you can update the precompiled bundle easily:

### Option A: Fast Single-Article Render
To render and update just the file you are currently editing without touching the rest of the site:

```bash
quarto render posts/path/to/my-article.qmd
```

The updated page is immediately refreshed in `_site/` and visible at `http://localhost:4200`.

### Option B: Full Incremental Precompilation
To update site listings, search indices, and any modified documents:

```bash
./precompile_drafts.sh
```

Because `_freeze/` caches all previously executed code cells, this completes in seconds for incremental changes.

---

## 📁 Repository Structure

```text
quarto-writing-drafts/
├── _quarto.yml            # Site configuration (draft-mode: visible, freeze: auto)
├── _freeze/               # Frozen computational execution cache (committed to git)
├── _site/                 # Precompiled static HTML website bundle
├── serve_drafts.sh        # Zero-lag local server running on port 4200
├── precompile_drafts.sh   # One-click incremental compiler script
├── posts/                 # Technical essays, computational physics, AI & STEM roadmaps
├── literature/            # Shakespeare sonnet archives and literary analyses
├── chapters/              # Monograph textbook chapters and reference books
└── tutorials/             # DevOps, Linux, and development tutorials
```

---

## 🔒 Publishing & Draft Lifecycle

* **Draft State (`draft: true`)**: Files remain private to this repository and are rendered locally via `./serve_drafts.sh`. They are never published to public GitHub Pages.
* **Publishing to Public Site**:
  1. Set `draft: false` (or remove `draft: true`) in the article's YAML frontmatter.
  2. Copy the sanitized article to the public repository (`/home/igorkan/repos/quarto-writing/posts/...`).
  3. Commit and push in the public repository to trigger the GitHub Actions deployment.

---

© 2026 Igor Kan
