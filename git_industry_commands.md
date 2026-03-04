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