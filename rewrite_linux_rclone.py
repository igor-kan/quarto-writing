import re

filepath = '/home/igorkan/repos/quarto-writing/posts/computer-science/setup-rclone-gdrive-linux.qmd'

with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Update title and categories
content = re.sub(r'title: "How to Set Up Rclone with Google Drive: Windows/WSL, Ubuntu & Arch Linux"', 
                 'title: "How to Set Up Rclone with Google Drive: Ubuntu, Fedora & Arch Linux"', content)
content = re.sub(r'description: "A complete cross-platform guide', 
                 'description: "A complete Linux-native guide', content)
content = re.sub(r'categories: \[DevOps, Cloud, Storage, Systems, Linux, Windows\]',
                 'categories: [DevOps, Cloud, Storage, Systems, Linux]', content)

# 2. Update Intro
content = re.sub(r'this guide covers everything from initial setup to cross-platform installation',
                 'this guide covers everything from initial setup to native Linux installation', content)

# 3. Section 1: Installation
content = re.sub(r'## 1\. Cross-Platform Installation', '## 1. Native Linux Installation', content)

fedora_text = """### 🎩 Fedora
Install `rclone` via `dnf`:
```bash
sudo dnf install rclone
```

"""
content = re.sub(r'### 🪟 Windows \(Native & WSL\).*?Verify the installation on any platform:', 
                 fedora_text + 'Verify the installation:', content, flags=re.DOTALL)

# 4. Section 3: Mounting
content = re.sub(r'### 🪟 Windows Native Mount.*?### 🐧 Linux Mount \(Ubuntu, Arch, WSL\)', 
                 '### 🐧 Linux Mount (Ubuntu, Fedora, Arch)', content, flags=re.DOTALL)

# 5. Section 5: Technologies Intro
content = re.sub(r'or \*\*clunky third-party Windows drivers\*\*\.', '.', content)

# 6. Section 5: Remove Windows Network Drives
win_network_drives_regex = r'### 3\. Windows Network Drives, WSL2, and the 9P Network Protocol.*?### 4\. Virtual Filesystem'
content = re.sub(win_network_drives_regex, '### 3. Virtual Filesystem', content, flags=re.DOTALL)

# Adjust numbering for section 5 items
content = re.sub(r'### 5\. VFS Cache Mode', '### 4. VFS Cache Mode', content)
content = re.sub(r'### 6\. POSIX Permission', '### 5. POSIX Permission', content)
content = re.sub(r'### 7\. Systemd User Services', '### 6. Systemd User Services', content)
content = re.sub(r'### 8\. Systemd Timers', '### 7. Systemd Timers', content)
content = re.sub(r'### 9\. Concurrency Control', '### 8. Concurrency Control', content)
content = re.sub(r'### 10\. Data Integrity', '### 9. Data Integrity', content)

# 7. Section 5: Rewrite Interoperability
interop_old = r'### 11\. Cross-Platform Interoperability and Methods.*?---'
interop_new = """### 10. Filesystem Interoperability and Methods
* **Concept:** Interoperability ensures that files created in one environment (e.g., Linux GUI apps like LibreOffice) can be seamlessly utilized in another (e.g., Linux command-line).
* **Methods:** The architecture achieves this via abstraction layers. The Linux kernel's Virtual File Switch (VFS) and FUSE allow standard GUI applications to access the cloud drive exactly as they would a local ext4 partition. Since Rclone treats file contents opaquely, you can use `grep` to parse a log file stored on Google Drive while a graphical application is simultaneously appending new lines to it, with the filesystem maintaining complete interoperability.

---"""
content = re.sub(interop_old, interop_new, content, flags=re.DOTALL)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated linux rclone article successfully.")
