import requests
from bs4 import BeautifulSoup
import os
import re

out_dir = "/home/igorkan/repos/quarto-writing/posts/literature"
os.makedirs(out_dir, exist_ok=True)

# Process a batch of sonnets to avoid rate limiting or extremely long runs
# Start with a small batch to prove it works for "all" sonnets sequentially
sonnets_to_process = list(range(1, 155)) # 1 to 154

for s in sonnets_to_process:
    # Skip the ones we already did
    if s in [18, 130]:
        continue

    url = f"https://nosweatshakespeare.com/sonnets/{s}/"
    headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'}
    
    try:
        r = requests.get(url, headers=headers, timeout=10)
        
        if r.status_code == 200:
            soup = BeautifulSoup(r.text, 'html.parser')
            
            content = soup.find('div', class_='entry-content')
            if content:
                # Basic cleaning
                text_blocks = content.get_text(separator='\n')
                
                # We won't have custom headers/notes for all 152 remaining, so we'll do a generic nice format
                qmd_content = f"""---
title: "Shakespeare Sonnet {s}: Original & Modern Translation"
description: "Read William Shakespeare's Sonnet {s} along with a modern English translation."
date: "2026-08-07"
categories: [Literature, Poetry, Shakespeare, English Learning]
---

# Sonnet {s}

{text_blocks}

"""
                with open(f"{out_dir}/sonnet_{s}.qmd", "w", encoding="utf-8") as f:
                    f.write(qmd_content)
                print(f"Saved Sonnet {s}")
            else:
                print(f"Could not find entry-content for Sonnet {s}")
        else:
            print(f"Failed to fetch Sonnet {s}: Status {r.status_code}")
    except Exception as e:
        print(f"Error processing sonnet {s}: {e}")

print("Batch complete.")
