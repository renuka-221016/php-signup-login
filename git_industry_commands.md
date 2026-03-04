1.Git Configuration Commands
Syntax:git config --global user.name
Purpose:This command sets your Git username globally on your system.
It will be used in all repositories to identify who made the commits.git config


Syntax:git config --global user.email
Purpose:This sets your email address for all commits Github uses this email too link your commits to your git hub account

Syntax:git config --list
Purpose:This command shows all git configuration setting: like user.name user.email default branch etc

Syntax: git config --unset user.email/user.name
Purpose:This command removes a previously set configuration value

Syntax:git clone <repository url>
Purpose:Copies an existing remote repository (like Github) to your local machine
It downloads full project ,complete commit history,Automatically sets remote as origin


Syntax:git clone --branch <branch_name>  <repository url>
Purpose:Clones a specific branch instead of the default branch
used when we only a feature branch,
working on a specific development branch
avoid downloading unnecessary branches



Syntax: git clone --depth <number><repository-url>
Purpose:Creates a shallow clone
It downloads limited commit history
makes cloning faster
reduces storage usage..
used in large projects,CI/CD pipelines
When full history is not required




3.Repository Status and Inspection
Syntax:git status
Purpose
Shows:
Current branch
Staged changes
Unstaged changes
Untracked files
Helps you understand the current working directory state.



Syntax: git log
Purpose:
Displays full commit history including:
Commit ID (SHA)
Author
Date
Commit message

Syntax:git log --oneline
Purpose: Shows compact commit history (one line per commit).

//
Syntax: git log --graph
Purpose:
Shows branch structure visually using ASCII graph.
Very useful for understanding merges and branch flow.

Syntax:git show <commit id>
Purpose:Shows
Commit details
Changes made in that commit (diff output)

//
Syntax: git diff
Purpose:
Shows changes between:
Working directory and staging area
Displays unstaged changes.


//
Syntax:git diff --staged
Purpose:


Syntax:git blame
Purpose:
Who last modified each line
Commit ID
Timestamp
Used for tracking line-level history.

Syntax:git reflog
Purpose:
Shows history of:
HEAD movements
Branch switches
Resets
Rebases
Very useful for recovering lost commits.

Syntax:git shortlog
Purpose:Summarizes commits by author.
Shows:
Number of commits
Author names


4.
Syntax:git add <file-name>
Purpose:Adds a specific file to the staging area.
Used when you want to track changes of a particular file before committing.

Syntax:git add .
Purpose:Adds all modified and new files in the current directory to the staging area.
Very useful when committing multiple files at once.

//
Syntax:git add -p
Purpose:Allows partial staging (patch mode).
We can:
Stage specific lines
Accept (y)
Reject (n)
Split changes
Used in professional development to commit clean changes

Syntax:git restore <file-name>
Purpose:Discards changes in the working directory.
Restores file to last committed state.
Changes will be lost.

//
Syntax:git restore --staged <file-name>
Purpose:Removes file from staging area but keeps changes in working directory.



Syntax:git rm <file-name>
Purpose:
Deletes file from:
Working directory
Staging area
Marks file for deletion in next commit.


Syntax:git mv <old-name> <new-name>
Purpose:
Renames or moves a file and stages the change automatically.
Better than:
