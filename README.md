# frontend-challenge
Frontend Challenger for the Thrillers

# Instructions

Clone this repository to your local machine with the command below
```
git clone https://github.com/thrillersng/frontend-challenge project-folder-name
```
Replace `project-folder-name` with any name of your choice, or remove it altogether to default to the name `frontend-challenge`.

Change to our new project directory. and continue below
```
cd project-folder-name
```

After this, run the command below to checkout out a new local branch that automatically tracks its remote counterpart. Git will automatically figure out it out for you.
```
git checkout groupNumber
```
The command above creates a branch named `group2` for instance that is based on remote `group2` branch and will automatically track it, pull and push to it. At this point, your current working directory will reflect the current files and folders in the `group2` remote branch (`group2` is used here as an instance. yours could be `group1` ...).

Install project dependencies that includes `jquery`, `bootstrap` and `popper.js` (required by `bootstrap`) using the command below. Please make sure that [npm](https://www.npmjs.com/) is installed in your machine and that is available in your global environment path.
```
npm install
```
Next, setup your `apache` or `iis` server for this project directory and that is it!!. Assuming you are working with `apache`, set up your virtual host to the serverName `thrillers-ng.localhost` to point to this project root directory for instance.

**Thanks for reading**

