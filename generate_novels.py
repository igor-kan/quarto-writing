import os
import re

def process_book(filename, out_prefix, title_prefix, author):
    with open(filename, 'r', encoding='utf-8') as f:
        text = f.read()

    # Find where the actual book starts and ends
    # Great Expectations chapters are usually "Chapter I", "Chapter 1", etc.
    # We can split by "\nChapter " or "\nCHAPTER "
    
    # Simple regex to split by Chapter headings
    # Look for 'Chapter ' followed by Roman or Arabic numerals
    pattern = re.compile(r'\n(CHAPTER|Chapter) ([IVXLCDMivxlcdm]+|\d+)\.?\n', re.IGNORECASE)
    
    parts = pattern.split(text)
    
    # parts[0] is preamble.
    # Every 3 parts is a chapter:
    # parts[1] is the word "CHAPTER", parts[2] is the number, parts[3] is the text.
    
    if len(parts) < 4:
        print(f"Could not parse chapters for {filename}")
        return

    chapter_count = 1
    for i in range(1, len(parts), 3):
        if i + 2 >= len(parts):
            break
            
        chap_num_raw = parts[i+1]
        chap_text = parts[i+2]
        
        # Stop if we hit project gutenberg footer
        if "*** END OF THE PROJECT GUTENBERG" in chap_text:
            chap_text = chap_text.split("*** END OF THE PROJECT GUTENBERG")[0]

        # Basic Quarto frontmatter
        qmd_content = f"""---
title: "{title_prefix} - Chapter {chapter_count}"
author: "{author}"
description: "Chapter {chapter_count} of {title_prefix}."
categories: [Literature, Novel]
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

# Chapter {chapter_count}

{chap_text.strip()}
"""
        out_path = f"/home/igorkan/repos/quarto-writing/posts/{out_prefix}-ch{chapter_count}.qmd"
        with open(out_path, 'w', encoding='utf-8') as out_f:
            out_f.write(qmd_content)
            
        chapter_count += 1

print("Processing Great Expectations...")
process_book('/tmp/great_expectations.txt', 'great-expectations', 'Great Expectations', 'Charles Dickens')

print("Processing Wuthering Heights...")
process_book('/tmp/wuthering_heights.txt', 'wuthering-heights', 'Wuthering Heights', 'Emily Brontë')

print("Done!")
