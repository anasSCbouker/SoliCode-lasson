# The 3 Zones of Git

## Simple idea
A file in Git goes through 3 zones:

1. **Working Directory** – where you edit files
2. **Staging Area** – the waiting room
3. **Repository** – the history

A file **cannot** go from zone 1 to zone 3 directly.  
It **must** pass by zone 2 first.

## The 3 zones

### 1. Working Directory
Your project folder on your computer.  
You write, change, or delete files here.  
Git sees the changes. But they are **not saved** yet.

### 2. Staging Area
The waiting room.  
You choose which files are ready for the next save.

### 3. Repository
The history.  
When you commit, Git saves a snapshot with a date, a name, and a message.

## Small example

1. You make `article.html` → in **Working Directory**
2. You run `git add article.html` → file goes to **Staging Area**
3. You run `git commit -m "add article page"` → file goes to **Repository**

## To remember

- Order: **Working → Staging → Repository**
- Staging lets you pick only some changes.
- No file goes to history without staging first.

## Words

- **Working Directory:** your files on your computer
- **Staging Area:** waiting room for the next commit
- **Repository:** the history of all commits
- **Commit:** a final save in Git