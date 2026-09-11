---
alwaysApply: true
always_on: true
trigger: always_on
description: Quarto Writing Main Blog Guidelines
---

# Quarto Writing Main Blog Guidelines

### Scope & Content Boundaries
* This repository (`quarto-writing`) is Igor's **main technical and personal blog**.
* It hosts general articles on Computer Science, Linux administration, Vim/Neovim, DevOps, Literature, and Philosophy.
* **DO NOT store university course-specific materials here** (e.g. PHYD57 problem sets, lecture notes, cluster login guides). Course materials belong strictly in their dedicated course repositories (e.g. `/home/igorkan/repos/phyd57h3`).

### Git Dual Remotes (MANDATORY)
* `origin`: `https://github.com/igor-kan/quarto-writing.git` (Public GitHub Pages deployment)
* `private`: `https://github.com/igor-kan/quarto-writing-drafts.git` (Private companion repo for drafts and backups)
* **Always push to both**:
  ```bash
  git push origin main && git push private main
  ```

### Drafts vs. Published
* "Publish" = ensure `draft: true` is not present (or set to `draft: false`).
* "Unpublish" / "Draft" = set `draft: true` in the frontmatter.
* When `draft: true` is enabled, Quarto will NOT render or index the article on the public website.

### UI & Styling Standards
* Adhere strictly to the Notion.so minimalist aesthetic in light and dark mode.
* Footer must display: `© 2026 Igor Kan`.
