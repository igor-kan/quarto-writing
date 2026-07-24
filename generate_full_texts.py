import os
import re

def create_waste_land():
    with open('/tmp/wasteland.txt', 'r', encoding='utf-8') as f:
        lines = f.readlines()

    start_idx = 0
    for i, line in enumerate(lines):
        if "I. THE BURIAL OF THE DEAD" in line and i > 50:
            start_idx = i
            break
            
    end_idx = len(lines)
    for i, line in enumerate(lines):
        if "NOTES ON “THE WASTE LAND”" in line and i > start_idx:
            end_idx = i
            break
            
    poem_lines = lines[start_idx:end_idx]
    
    header = """---
title: "The Waste Land (Full Text)"
author: "T.S. Eliot"
description: "The complete text of T.S. Eliot's The Waste Land."
categories: [Literature, Poetry]
format:
  html:
    page-layout: article
    grid:
      sidebar-width: 0px
      body-width: 800px
      margin-width: 300px
    reference-location: margin
    citation-location: margin
---

# Introduction

*The Waste Land* (1922) by T.S. Eliot is widely regarded as one of the most important poems of the 20th century.

"""

    with open('/home/igorkan/repos/quarto-writing/posts/the-waste-land.qmd', 'w', encoding='utf-8') as f:
        f.write(header)
        for line in poem_lines:
            # simple formatting: replace leading spaces with non-breaking spaces for poetry formatting
            # or we can just wrap the poem in a `<pre>` block or use markdown line breaks
            # Using standard markdown, we need two spaces at the end of a line for a line break
            # or just leave it since quarto might handle it, but wait, markdown ignores single line breaks.
            # Let's add two spaces at the end of each line
            if line.strip() == "":
                f.write("\n")
            elif line.strip().startswith("I. THE") or line.strip().startswith("II.") or line.strip().startswith("III.") or line.strip().startswith("IV.") or line.strip().startswith("V."):
                f.write("\n## " + line.strip() + "\n\n")
            else:
                # remove the line numbers on the right if present
                line = re.sub(r'\s+\d+\s*$', '\n', line)
                f.write(line.rstrip('\n') + "  \n")

def create_major_barbara():
    with open('/home/igorkan/.gemini/antigravity-cli/brain/903db887-b1b9-4c2a-9f42-47fa80108611/.system_generated/steps/83/content.md', 'r', encoding='utf-8') as f:
        content = f.read()

    acts = re.split(r'#\s*Act [123]', content)
    
    if len(acts) >= 4:
        # acts[0] is preamble
        for act_num in range(1, 4):
            header = f"""---
title: "Major Barbara - Act {act_num}"
author: "George Bernard Shaw"
description: "Act {act_num} of Major Barbara."
categories: [Literature, Drama]
format:
  html:
    page-layout: article
    grid:
      sidebar-width: 0px
      body-width: 800px
      margin-width: 300px
    reference-location: margin
    citation-location: margin
---

# Act {act_num}

"""
            with open(f'/home/igorkan/repos/quarto-writing/posts/major-barbara-act{act_num}.qmd', 'w', encoding='utf-8') as f:
                f.write(header)
                # Replace character names with bold for better reading
                act_text = acts[act_num]
                # rudimentary formatting
                f.write(act_text)

create_waste_land()
create_major_barbara()
