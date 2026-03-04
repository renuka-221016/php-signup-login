1.Git Configuration Commands
Syntax:git config --global user.name
git config --global user.name "renuka"
Purpose:This command sets your Git username globally on your system.
It will be used in all repositories to identify who made the commits.git config


Syntax:git config --global user.email
git config --global user.email "abc@gmail.com"
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

//
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


5.
Syntax:git commit
Purpose:Creates a new commit with the staged changes.
When used without -m, Git opens the default editor to write a detailed commit message.
Used when writing multi-line commit messages.

Syntax:git commit -m "Your msg"
Purpose:Creates a commit with a message directly from the command line.
Most commonly used commit command.



Syntax:got commit --amend -m "New Message"
Purpose:
Used to:
Modify the last commit message
Add forgotten changes to the last commit
Combine staged changes with previous commit
Should not amend commits that are already pushed to shared repository.






//hello
Command Name: git commit --amend
Syntax:
git commit --amend

Purpose:
Used to modify the most recent commit. You can change the commit message or add newly staged changes to it. This rewrites the last commit and creates a new commit ID.

Command Name: git commit --no-edit
Syntax:
git commit --amend --no-edit

Purpose:
Amends the previous commit without changing its commit message. Useful when you forgot to stage a file but the message is already correct.

Command Name: git branch
Syntax:
git branch

Purpose:
Lists all local branches in the repository. The current active branch is marked with *.

 Command Name: git branch -a
Syntax:
git branch -a

Purpose:
Displays all local and remote branches. Helps in viewing branches available on the remote repository.

Command Name: git branch -d
Syntax:
git branch -d branch-name

Purpose:
Deletes a local branch safely. Git prevents deletion if the branch has unmerged changes.

Command Name: git branch -D
Syntax:
git branch -D branch-name

Purpose:
Force deletes a local branch. Deletes the branch even if it has unmerged commits.

Command Name: git checkout
Syntax:
git checkout branch-name

Purpose:
Switches from the current branch to another existing branch. Updates working directory files to match that branch.

Command Name: git checkout -b
Syntax:
git checkout -b new-branch-name

Purpose:
Creates a new branch and switches to it immediately. Combines branch creation and checkout in one command.

Command Name: git switch
Syntax:
git switch branch-name

Purpose:
Switches to an existing branch. Modern alternative to git checkout for branch switching.

Command Name: git switch -c
Syntax:
git switch -c new-branch-name

Purpose:
Creates a new branch and switches to it. Cleaner and safer replacement for git checkout -b.

Command Name: git merge
Syntax:
git merge branch-name

Purpose:
Combines changes from the specified branch into the current branch. Creates a merge commit if histories have diverged.

Command Name: git merge --no-ff
Syntax:
git merge --no-ff branch-name

Purpose:
Forces creation of a merge commit even if fast-forward is possible. Keeps branch history visible and structured.

Command Name: git remote
Syntax:
git remote
Purpose:
Lists remote repository names configured for the project. Common remote name is origin.

Command Name: git remote -v
Syntax:
git remote -v
Purpose:
Shows remote repository URLs for fetch and push operations. Useful for verifying connected repository.
 
 Command Name: git remote add
Syntax:
git remote add origin repository-URL

Purpose:
Adds a new remote repository to the project. Enables pushing and pulling changes to/from that remote.

Command Name: git remote remove
Syntax:
git remote remove remote-name
Purpose:
Removes a configured remote repository. Stops the connection between local repo and that remote.

Command Name: git fetch
Syntax:
git fetch
Purpose:
Downloads latest changes from remote repository without merging them. Updates remote-tracking branches only.

Command Name: git fetch --all
Syntax:
git fetch --all
Purpose:
Fetches updates from all configured remote repositories. Useful when working with multiple remotes.

Command Name: git pull
Syntax:
git pull
Purpose:
Fetches changes from the remote repository and automatically merges them into the current branch. Combination of git fetch + git merge.

Command Name: git pull --rebase
Syntax:
git pull --rebase
Purpose:
Fetches changes and rebases local commits on top of remote commits. Keeps commit history clean and linear.

Command Name: git push
Syntax:
git push
Purpose:
Uploads local commits to the remote repository. Updates the remote branch with local changes.

Command Name: git push -u origin branch-name
Syntax:
git push -u origin branch-name
Purpose:
Pushes the branch to remote and sets upstream tracking. After this, you can use git push without specifying branch name.

Command Name: git push --force
Syntax:
git push --force
Purpose:
Forces push by overwriting remote branch history. Used after rebasing or amending commits already pushed.
Can overwrite others’ work if not used carefully.




//
Command Name: git stash

Syntax:

git stash

Purpose:
Temporarily saves uncommitted changes (staged and unstaged) and cleans the working directory.
Useful when you need to switch branches without committing incomplete work.

Command Name: git stash list
Syntax:
git stash list
Purpose:
Displays all saved stashes.
Each stash is stored as stash@{index}.

Command Name: git stash pop
Syntax:
git stash pop
Purpose:
Applies the latest stash and removes it from the stash list.
Restores saved changes back to working directory.

Command Name: git stash apply
Syntax:
git stash apply
Purpose:
Applies stashed changes but keeps them in the stash list.
Useful if you want to reuse the stash again.

Command Name: git stash drop
Syntax:
git stash drop stash@{0}
Purpose:
Deletes a specific stash entry.
Helps clean unnecessary stored changes.

Command Name: git stash clear
Syntax:
git stash clear
Purpose:
Deletes all stashed entries permanently.
Cannot be undone.

RESET COMMANDS
Command Name: git reset
Syntax:
git reset <commit-id>

Purpose:
Moves HEAD to a specified commit.
Default mode is --mixed.

Command Name: git reset --soft
Syntax:
git reset --soft <commit-id>
Purpose:
Moves HEAD to specified commit but keeps changes staged.
Useful when you want to redo commit message.

Command Name: git reset --mixed
Syntax:
git reset --mixed <commit-id>
Purpose:
Moves HEAD and unstages changes but keeps them in working directory.
Default reset mode.

Command Name: git reset --hard
Syntax:
git reset --hard <commit-id>

Purpose:
Moves HEAD and deletes all changes in staging and working directory.
Permanently removes uncommitted work.

REVERT
Command Name: git revert
Syntax:
git revert <commit-id>
Purpose:
Creates a new commit that reverses changes of specified commit.
Safe way to undo changes in shared repositories.

Command Name: git clean -f
Syntax:
git clean -f
Purpose:
Removes untracked files from working directory.
Does not remove directories.

Command Name: git clean -fd
Syntax:
git clean -fd
Purpose:
Removes untracked files and directories.
Useful for cleaning project completely.

REBASE
Command Name: git rebase

Syntax:

git rebase branch-name

Purpose:
Moves current branch commits on top of another branch.
Creates a linear commit history.

Command Name: git rebase -i
Syntax:
git rebase -i HEAD~3
Purpose:
Interactive rebase to edit, squash, reorder, or delete commits.
Used for cleaning commit history before pushing.

Command Name: git rebase --continue
Syntax:
git rebase --continue
Purpose:
Continues rebase after resolving conflicts.

Command Name: git rebase --abort
Syntax:
git rebase --abort
Purpose:
Cancels the rebase process and restores branch to original state.

CHERRY PICK
Command Name: git cherry-pick
Syntax:
git cherry-pick <commit-id>

Purpose:
Applies a specific commit from another branch to current branch.
Useful for selectively copying fixes.

PATCH COMMANDS
Command Name: git format-patch
Syntax:
git format-patch <commit-id>

Purpose:
Creates patch files from commits.
Used to share changes via email or manually.
Command Name: git apply
Syntax:
git apply file.patch

Purpose:
Applies changes from a patch file to working directory.
Does not create a commit automatically.

Command Name: git am
Syntax:
git am file.patch
Purpose:
Applies patch and creates a commit automatically.
Used for applying emailed patches.

Command Name: git tag
Syntax:
git tag
Purpose:
Lists all tags in repository.
Tags are used to mark release versions.

Command Name: git tag -a
Syntax:
git tag -a v1.0 -m "Version 1.0"
Purpose:
Creates annotated tag with message.
Recommended for release versions.

Command Name: git tag -d
Syntax:
git tag -d v1.0
Purpose:
Deletes a local tag.

Command Name: git push origin --tags
Syntax:
git push origin --tags
Purpose:
Pushes all local tags to remote repository.

SUBMODULES
Command Name: git submodule add
Syntax:
git submodule add repository-URL
Purpose:
Adds another Git repository inside current project as submodule.

Command Name: git submodule init
Syntax:
git submodule init

Purpose:
Initializes submodules after cloning project.

Command Name: git submodule update
Syntax:
git submodule update
Purpose:
Fetches and checks out submodule content.

BISECT
Command Name: git bisect
Syntax:
git bisect
Purpose:
Used to find the commit that introduced a bug using binary search method.

Command Name: git bisect start
Syntax:
git bisect start
Purpose:
Starts the bisect process.

Command Name: git bisect good
Syntax:
git bisect good <commit-id>

Purpose:
Marks a commit as good (no bug).

Command Name: git bisect bad
Syntax:
git bisect bad <commit-id>
Purpose:
Marks a commit as bad (contains bug).
Git continues binary search to identify problematic commit.


