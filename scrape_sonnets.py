import requests
from bs4 import BeautifulSoup
import os

out_dir = "/home/igorkan/repos/quarto-writing/posts/literature"
os.makedirs(out_dir, exist_ok=True)

sonnets = [18, 130]

for s in sonnets:
    url = f"https://nosweatshakespeare.com/sonnets/{s}/"
    headers = {'User-Agent': 'Mozilla/5.0'}
    r = requests.get(url, headers=headers)
    
    if r.status_code == 200:
        soup = BeautifulSoup(r.text, 'html.parser')
        
        content = soup.find('div', class_='entry-content')
        if content:
            text = content.get_text(separator='\n')
            
            qmd_content = f"""---
title: "Shakespeare Sonnet {s}: Original & Modern Translation"
description: "A side-by-side reading of William Shakespeare's Sonnet {s} with a modern English translation."
date: "2026-08-07"
categories: [Literature, Poetry, Shakespeare, English Learning]
---

# Sonnet {s}

{text[:2000]}...
"""
            with open(f"{out_dir}/sonnet_{s}.qmd", "w", encoding="utf-8") as f:
                f.write(qmd_content)
            print(f"Saved Sonnet {s}")
        else:
            print(f"Could not find entry-content for Sonnet {s}")
    else:
        print(f"Failed to fetch Sonnet {s}: Status {r.status_code}")

