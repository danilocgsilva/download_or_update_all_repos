# download_or_update_all_repos

***Prerequisite***
You need a web server somewhere to execute php and bring to you your repositories. Even your local php dev can serve. You can start this just typing `php -S localhost:8000` in the terminal in current `programfiles` directory, them your address server will be `http://localhost:8000`.

Install:

1. In the `programfiles` folder, copy the `vars.sample` renaming to `vars`. Them in the `vars` changes the url base to your php server address and the username that is the username from your Github.

2. Copy the `listrepos.confs.samples.php` to `listrepos.confs.php`. Change the value from "`USERNAME:TOKEN`". The `USERNAME` is your user name from Github account. The token is for authorization from an api. Check [this link](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token) to know how to generate the token.

3. Send the listrepos.php and listrepos.confs.php to your web server directory, the same you have setted to the downloadorupdaterepos. DONE!


Usage:

1. Be in the `programfiles` folder from this repository.

2. Execute `downloadorupdaterepos <THE_ADDRESS_PATH_WHERE_ALL_REPOSITORIES_WILL_BE_DOWNLOADED>`. DONE!
