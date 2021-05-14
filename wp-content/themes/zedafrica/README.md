## Setup and run theme on Localhost

1. Install Git Bash for Windows
2. Install Xampp/Wamp (I installed Xampp in my drive `D:/`)
3. Install WordPress in localhost (Mine is in `D:/xampp/htdocs/wpstarter`). // wpstarter is the name of my wp instance.
4. Open Git Bash and change directory to your wordpress theme folder by typing the following command, relevant to your directory path:
 	`cd D:/xampp/htdocs/wpstarter/wp-content/themes/`
5. We will now clone the theme from Git into this folder. Login to Bitbucket, open the wpstarter repository, find the clone buttonc copy the code and past it in Git Bash
6. You can now go ahead and activate the theme in your wp dashboard and start customizing it.
7. Once you've made some changes that you want to commit, go to git bash and type:

    * `git add .`
    * `git commit -m "here goes your commit message, usually a description of what changes you've made"`
    * `git pull`
    * `git push`
        * EXPLANATIONS: `git add .` will index all your changes
        * `git commit` kind of wraps them into a bundle with a description
        * `gut pull` checks to see if there is a previous push by someone else just incase you've overwitten their work. When you git pull and and there are merge conflicts, you may have to install VisualStudio and fix merging issues - basically code that you've changed and someone else has also changed concurrently. Visual Studio will always show you which lines are conflicting.
        * `git push` pushes your code to the main repository.

8. Last but most important - Whenever you start or resume work, always `git pull`, because there might be modifications done to the codebase that you are not aware of. Always git pull before you start a new session of work, and push whenever you take a break.


## AOB
There's a [channel in the Zedafrica Slack](https://zedafrica.slack.com/archives/C013N1R2NSE) for conversations around the theme