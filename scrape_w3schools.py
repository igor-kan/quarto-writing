import os
import subprocess
import re
import urllib.request
from urllib.error import URLError

tutorials = [
    "html", "css", "js", "typescript", "react", "sql", "postgresql", "json",
    "python/pandas", "python/matplotlib", "r", "python/numpy", "python/scipy", 
    "python", "java", "kotlin", "c", "cpp", "ai", "datascience", "dsa", "nodejs", 
    "tailwindcss", "cybersecurity", "excel", "howto", "git", "aws", "rust", 
    "statistics"
]

base_dir = "not_published"
os.makedirs(base_dir, exist_ok=True)

headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'}

for tut in tutorials:
    folder_name = f"w3schools_{tut.replace('/', '_')}_tutorial"
    out_dir = os.path.join(base_dir, folder_name)
    os.makedirs(out_dir, exist_ok=True)
    
    url = f"https://www.w3schools.com/{tut}/index.php"
    if tut == "howto":
        url = "https://www.w3schools.com/howto/default.asp"
    
    print(f"Fetching index for {tut}...")
    try:
        req = urllib.request.Request(url, headers=headers)
        with urllib.request.urlopen(req) as response:
            html = response.read().decode('utf-8', errors='ignore')
    except urllib.error.HTTPError as e:
        if e.code == 404:
            url = f"https://www.w3schools.com/{tut}/default.asp"
            try:
                req = urllib.request.Request(url, headers=headers)
                with urllib.request.urlopen(req) as response:
                    html = response.read().decode('utf-8', errors='ignore')
            except Exception as e2:
                print(f"Failed to fetch {url}: {e2}")
                continue
        else:
            print(f"Failed to fetch {url}: {e}")
            continue
    except Exception as e:
        print(f"Failed to fetch {url}: {e}")
        continue
    
    # Extract links that belong to this tutorial
    # e.g., href="html_intro.php" or href="default.asp"
    links = set()
    tut_base = tut.split('/')[-1]
    
    # Find all hrefs
    matches = re.findall(r'href="(.*?)"', html)
    for m in matches:
        if m.endswith(".php") or m.endswith(".asp"):
            if m.startswith(tut_base) or not "/" in m:
                links.add(m)
    
    # Add index page
    if url.endswith(".php") or url.endswith(".asp"):
        links.add(url.split('/')[-1])
        
    print(f"Found {len(links)} links for {tut}")
    
    # Download them using wget
    link_list = [f"https://www.w3schools.com/{tut}/{link}" for link in links]
    
    # Break into chunks to avoid too long command lines
    chunk_size = 50
    for i in range(0, len(link_list), chunk_size):
        chunk = link_list[i:i+chunk_size]
        cmd = ["wget", "-nc", "-q", "-P", out_dir] + chunk
        subprocess.run(cmd)
    print(f"Finished {tut}")

print("All scraping completed.")
