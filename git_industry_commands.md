## git configuration
## git config --global user.name 
syntax:git config --global user.name "your name"
purpose:sets your username globally for all repositories on your system
example: git config --global user.name "aashritha-220818"

## git config --global user.email
syntax:git config --global user.email "your@gmail.com"
purpose:sets your email globally .this email will appear in your commands
example:git config --global user.email "n220818@rguktn.ac.in"

## git config --list
syntax:git config --list
purpose:displays all git configuration settings(username,email,editor ,etc)
example:username=aashritha-220818
user.email=n220181@rguktn.ac.in
core.editor=vim

## git config --unset
syntax:git config --global --unset user.name or git config --global --unset user.email
purpose:removes a specific configurtaion value
example:git config --global --unset user.email
git config --list
<img width="1366" height="768" alt="Screenshot (13)" src="https://github.com/user-attachments/assets/1b97e960-8cd2-48e4-bb3f-138ab5e1c0e7" />
##Repository setup commands
## git init 
syntax:git init
purpose:initializes a new git repository in your currnet folder.it creates a hidden .git directory to track changes
example:git init
## git clone
syntax:git clone <repository-url>
purpose:creates a copy of an existing repository  from remote(like github) to your local system
example:git clone https://github.com/aashritha-220818/SMART-AGRICULTURE-WEBSITE
## git clone --branch
syntax:git clone --branch <branch-name> <repository-name>
purpose:choose a specific branch instead of default one
example:git clone --branch main https://github.com/aashritha-220818/SMART-AGRICULTURE-WEBSITE
## git clone --depth
syntax:git clone --depth <number> <repository-url>
purpose:creates a shallow clone with limited commit history.used to make cloning faster
example:git clone --depth 1 https://github.com/aashritha-220818/SMART-AGRICULTURE-WEBSITE
<img width="1366" height="768" alt="Screenshot (14)" src="https://github.com/user-attachments/assets/0bf5c47e-892b-4b16-8352-e2b1499cbfe6" />
## Repository status and inspection commands
## git status
syntax:git status
purpose: shows current state of the working directory:modified files,stagged files,untarcked file ,current branch
example:git status

## git log
syntax:git log
purpose:displays fulll commit history(commit id ,author,date,message).
<img width="1366" height="768" alt="Screenshot (15)" src="https://github.com/user-attachments/assets/75c66577-e557-41c6-aae2-0431dec13057" />
## git log --oneline
syntax:git log --oneline
purpose:shows commit history in short one-line format
example:fcce38c (HEAD -> main, origin/main)  sneha
3cccda0 run
## git log --graph
syntax:git log --graph --oneline --all
purpose:displays branch structure visually using graph 
<img width="1366" height="768" alt="Screenshot (17)" src="https://github.com/user-attachments/assets/4d2f9af6-7d9b-4f7c-80e7-148b6c5fdcb4" />
## git show 
syntax:git show <commit-id>
purpose:shows detailed informations about a specific commit changes made,author,commit message
example:git show a3f5c2d
<img width="1366" height="768" alt="Screenshot (18)" src="https://github.com/user-attachments/assets/c17484d0-5bae-4240-9210-521e4d9875ec" />
## git diff
syntax:git diff
purpose:shows changes made in files but not yet staged
## git diff --staged
syntax:git diff --staged
purpose:shows changes that are staged (after git add but before commit)
## git blame
syntax:git blame  <filename>
purpose:shows who modified each line of a file and in which commit
example:git blame
git_industry_commands.md

<img width="1366" height="768" alt="Screenshot (19)" src="https://github.com/user-attachments/assets/e5fb4ebc-534b-4385-9718-1905dc8988d3" />
## git reflog
syntax:git reflog
purpo<img width="1366" height="768" alt="Screenshot (20)" src="https://github.com/user-attachments/assets/f46523cf-b68d-4fa6-aeb1-957e1f42c94e" />
se:shows history of head changes (very usefiul for recoverin glost commits).
## git shortlog
syntax:git shortlog
purpose:shows commit summary grouped by author
<img width="1366" height="768" alt="Screenshot (21)" src="https://github.com/user-attachments/assets/1f3ea328-2390-43c3-968c-012ccc4d2543" />
## File tracking
## git add
syntax:git add <filename>
purpose:stages a specific file so it can be included in the next  commit
example:git add
## git add .
syntax: git add .
purpose:stages all modified and new files in the current directory and subdirections
## git add -p
syntax:git add -p
purpose:stages changes interactively,allowing you to choose parts of files
## git restore
syntax: git restore <file-name>
purpose:Discards changes in working directory and restores file to last committed state
example:git restore git_industry_commands.md
## git restore --staged
syntax:git restore --staged <file.name>
purpose:unstages a file but keeps chnages in working directory
example:git restore --staged git_industry_commands.md




