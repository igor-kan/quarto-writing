import os
import re
import urllib.request
import time

BOOKS = {
    "hamlet": {"id": "1524", "title": "Hamlet", "author": "William Shakespeare", "type": "act"},
    "macbeth": {"id": "1533", "title": "Macbeth", "author": "William Shakespeare", "type": "act"},
    "romeo-and-juliet": {"id": "1513", "title": "Romeo and Juliet", "author": "William Shakespeare", "type": "act"},
    "pride-and-prejudice": {"id": "1342", "title": "Pride and Prejudice", "author": "Jane Austen", "type": "chapter"},
    "frankenstein": {"id": "84", "title": "Frankenstein", "author": "Mary Shelley", "type": "chapter"},
    "dracula": {"id": "345", "title": "Dracula", "author": "Bram Stoker", "type": "chapter"},
    "the-great-gatsby": {"id": "64317", "title": "The Great Gatsby", "author": "F. Scott Fitzgerald", "type": "chapter"},
    "dubliners": {"id": "2814", "title": "Dubliners", "author": "James Joyce", "type": "story"},
    "the-odyssey": {"id": "1727", "title": "The Odyssey", "author": "Homer", "type": "book"},
    "inferno": {"id": "1001", "title": "Divine Comedy, Longfellow's Translation, Hell", "author": "Dante Alighieri", "type": "canto"},
    "poe-works": {"id": "2147", "title": "The Works of Edgar Allan Poe", "author": "Edgar Allan Poe", "type": "story"},
    "sherlock-holmes": {"id": "1661", "title": "The Adventures of Sherlock Holmes", "author": "Arthur Conan Doyle", "type": "adventure"}
}

def download_book(book_id):
    urls = [
        f"https://gutenberg.org/cache/epub/{book_id}/pg{book_id}.txt",
        f"https://gutenberg.org/files/{book_id}/{book_id}-0.txt",
        f"https://gutenberg.org/files/{book_id}/{book_id}.txt"
    ]
    for url in urls:
        try:
            req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
            with urllib.request.urlopen(req) as response:
                return response.read().decode('utf-8')
        except Exception as e:
            continue
    return None

def split_text(text, split_type):
    if split_type == "act":
        pattern = re.compile(r'\n(ACT|Act)\s+([IVXLCDMivxlcdm]+|\d+)\b', re.IGNORECASE)
    elif split_type == "chapter":
        pattern = re.compile(r'\n(CHAPTER|Chapter|Letter)\s+([IVXLCDMivxlcdm]+|\d+)\b', re.IGNORECASE)
    elif split_type == "story":
        # Dubliners/Poe use ALL CAPS titles usually or we just use broad heuristic, let's use a generic split
        pattern = re.compile(r'\n([A-Z][A-Z\s,]+)\n\n', re.MULTILINE)
    elif split_type == "book":
        pattern = re.compile(r'\n(BOOK|Book)\s+([IVXLCDMivxlcdm]+|\d+)\b', re.IGNORECASE)
    elif split_type == "canto":
        pattern = re.compile(r'\n(CANTO|Canto)\s+([IVXLCDMivxlcdm]+|\d+)\b', re.IGNORECASE)
    elif split_type == "adventure":
        pattern = re.compile(r'\n(ADVENTURE|Adventure)\s+([IVXLCDMivxlcdm]+|\d+)\b', re.IGNORECASE)
    else:
        pattern = re.compile(r'\n(CHAPTER|Chapter)\s+([IVXLCDMivxlcdm]+|\d+)\b', re.IGNORECASE)
        
    parts = pattern.split(text)
    return parts

def generate_quarto_files(book_key, book_info, text):
    parts = split_text(text, book_info["type"])
    
    # Heuristic: parts[0] is preamble.
    # parts[1] is matched group 1, parts[2] is matched group 2, parts[3] is text
    # Exception: if split_type == "story", there is only 1 matched group
    
    count = 1
    
    if book_info["type"] == "story":
        for i in range(1, len(parts), 2):
            if i + 1 >= len(parts): break
            section_title = parts[i].strip()
            section_text = parts[i+1].split("*** END OF THE PROJECT GUTENBERG")[0].strip()
            if len(section_text) < 500: continue # Skip short matches
            
            write_file(book_key, book_info, count, section_text, section_title)
            count += 1
    else:
        for i in range(1, len(parts), 3):
            if i + 2 >= len(parts): break
            section_type = parts[i].strip().capitalize()
            section_num = parts[i+1].strip()
            section_text = parts[i+2].split("*** END OF THE PROJECT GUTENBERG")[0].strip()
            if len(section_text) < 200: continue # Skip short matches
            
            title_suffix = f"{section_type} {section_num}"
            write_file(book_key, book_info, count, section_text, title_suffix)
            count += 1

def write_file(book_key, book_info, count, content, title_suffix):
    title = f"{book_info['title']} - {title_suffix}"
    qmd_content = f"""---
title: "{title}"
author: "{book_info['author']}"
description: "{title_suffix} of {book_info['title']}."
categories: [Literature, Classic]
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

# {title_suffix}

{content}
"""
    # Create valid filename
    safe_title = title_suffix.replace(' ', '-').lower()
    out_path = f"/home/igorkan/repos/quarto-writing/posts/{book_key}-{safe_title}.qmd"
    # To avoid filename length issues or strange characters
    out_path = "".join([c for c in out_path if c.isalpha() or c.isdigit() or c in ['-', '.', '/']])
    
    # Just use sequential numbering to be safe
    out_path = f"/home/igorkan/repos/quarto-writing/posts/{book_key}-part{count}.qmd"
    
    with open(out_path, 'w', encoding='utf-8') as f:
        f.write(qmd_content)

for key, info in BOOKS.items():
    print(f"Downloading {info['title']}...")
    text = download_book(info['id'])
    if text:
        print(f"Parsing and generating files for {info['title']}...")
        generate_quarto_files(key, info, text)
        time.sleep(2) # polite delay
    else:
        print(f"Failed to download {info['title']}")

print("All books processed!")
