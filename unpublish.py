import os

files = [
    "posts/computer-science/vim-neovim-tutorial.qmd",
    "posts/computer-science/bash-scripting-guide.qmd",
    "posts/computer-science/scripting-fundamentals-bash.qmd",
    "posts/computer-science/bash-pipelines-and-data-wrangling.qmd",
    "posts/computer-science/linux-desktop-guide.qmd",
    "posts/computer-science/linux-filesystem-hierarchy.qmd"
]

for filepath in files:
    full_path = os.path.join('/home/igorkan/repos/quarto-writing', filepath)
    if not os.path.exists(full_path):
        print(f"File not found: {full_path}")
        continue
        
    with open(full_path, 'r', encoding='utf-8') as f:
        lines = f.readlines()
        
    # Check if already has draft: true
    if any(line.strip().startswith('draft: true') for line in lines):
        print(f"Already unpublished: {filepath}")
        continue
        
    # Find the end of the YAML header (second '---')
    end_yaml_idx = -1
    if lines and lines[0].strip() == '---':
        for i in range(1, len(lines)):
            if lines[i].strip() == '---':
                end_yaml_idx = i
                break
                
    if end_yaml_idx != -1:
        lines.insert(end_yaml_idx, "draft: true\n")
        with open(full_path, 'w', encoding='utf-8') as f:
            f.writelines(lines)
        print(f"Unpublished: {filepath}")
    else:
        print(f"No YAML header found in: {filepath}")
