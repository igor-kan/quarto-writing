import sys

def update_wsl_file():
    filepath = '/home/igorkan/repos/quarto-writing/posts/computer-science/setup-rclone-gdrive-wsl-windows.qmd'
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    insert_str = """
### 12. Concurrency Control: Read/Write Locks and Asynchronous Updates
* **Read/Write Locks:** When you edit a file, multiple processes might try to read or write to it simultaneously. Rclone's VFS layer enforces POSIX-compliant **read/write locks**, ensuring that if a text editor is writing to a file, a background backup process cannot read it until the write is complete, preventing data corruption.
* **Asynchronous Updates:** When you hit "Save" on a large document, the write operation is committed instantly to your local VFS cache. The Rclone daemon then performs an **asynchronous update**—uploading the file to Google Drive in the background. Your text editor regains control instantly without freezing to wait for the network upload to finish.

### 13. Data Integrity & Verification Scripts
* **Concept:** Network drops or API errors can silently corrupt uploads. Verification scripts automate the checking of file integrity between local and remote endpoints without re-downloading files.
* **How it Works:** Scripts leveraging `rclone check` or custom Python automation fetch cryptographic hashes (MD5, SHA1) directly from the Google Drive API and compare them against the local cache. If a mismatch is detected, the script can trigger a re-upload, guaranteeing mathematical data parity.

### 14. Cross-Platform Interoperability and Methods
* **Concept:** Working simultaneously with Linux CLI tools and Windows graphical applications creates pathing and permission conflicts.
* **Interoperability Methods:** The architecture handles this via translation layers. Windows paths (`C:\`) and WSL network paths (`\\wsl$`) are unified through the 9P protocol. Line endings (CRLF vs LF) are preserved perfectly because Rclone treats files as binary objects. This means you can run a `sed` script against `~/gdrive/config.txt` in Linux, and subsequently edit the exact same file in Windows Notepad via `G:\config.txt` without corrupting formatting.
"""

    if "12. Concurrency Control" in content:
        print("Already updated wsl file.")
    else:
        # insert before "---" right after section 11
        search_target = "    └── 3. Maint Timer (04:00)  ──> rclone cleanup & vfs purge\n           Flushes orphaned cache chunks and cleans Google Drive trash\n  ```\n"
        idx = content.find(search_target)
        if idx != -1:
            idx += len(search_target)
            new_content = content[:idx] + insert_str + content[idx:]
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print("Updated WSL file.")
        else:
            print("Failed to find insertion point in WSL file.")

def update_linux_file():
    filepath = '/home/igorkan/repos/quarto-writing/posts/computer-science/setup-rclone-gdrive-linux.qmd'
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    insert_str = """
### 9. Concurrency Control: Read/Write Locks and Asynchronous Updates
* **Read/Write Locks:** When you edit a file, multiple processes might try to access it simultaneously. Rclone's VFS layer enforces POSIX-compliant **read/write locks**, ensuring that if a text editor is saving a file, a background backup process cannot read it until the save completes, preventing data corruption.
* **Asynchronous Updates:** When you hit "Save", the write is committed instantly to your local sparse-file cache. Rclone then performs an **asynchronous update**, uploading the file to Google Drive in the background. Your application regains control instantly without freezing to wait for the network.

### 10. Data Integrity & Verification Scripts
* **Concept:** Network drops or API timeouts can occasionally cause silent data corruption during massive transfers. 
* **Verification Scripts:** You can automate integrity checks using `rclone check` in your bash scripts. Rclone fetches cryptographic hashes (like MD5) from the cloud API and compares them against your local files. This provides mathematical verification that your remote backups are identical to your local copies without actually re-downloading the data.

### 11. Cross-Platform Interoperability and Methods
* **Concept:** Interoperability ensures that files created in one environment (e.g., Windows GUI apps) can be seamlessly utilized in another (e.g., Linux command-line).
* **Methods:** The architecture achieves this via abstraction layers. Windows native applications access the drive via the 9P protocol as a mapped network drive, while Linux tools see a standard POSIX filesystem via FUSE. Since Rclone treats file contents opaquely, you can use Linux `grep` to parse a log file stored on Google Drive while a Windows application is simultaneously appending new lines to it, with both systems maintaining complete interoperability.
"""

    if "9. Concurrency Control" in content:
        print("Already updated linux file.")
    else:
        search_target = "  `Systemd Timer (2:00 AM)` ──> `Backup Script (rclone sync local to cloud)` ──> `Prune Script (rclone delete files older than 30 days)` ──> `Maintenance Script (rclone dedupe to fix duplicate filenames)`\n"
        idx = content.find(search_target)
        if idx != -1:
            idx += len(search_target)
            new_content = content[:idx] + insert_str + content[idx:]
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print("Updated Linux file.")
        else:
            print("Failed to find insertion point in Linux file.")

update_wsl_file()
update_linux_file()
