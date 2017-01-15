# download_or_update_all_repos

***Prerequisite***
You need a web server somewhere to execute php and bring to you your repositories. Even your local php dev can serve...

Install:

1. In the programfiles/downloadorupdaterepos file, change the line value of urlbase to your own web server directory. You can find it in the first working line program.

2. To execute the program, I recommends to move it to the /usr/local/bin folder, so it can be used anywhere. Don't forget to allow execute permission to the file. 

3. In the listrepos.confs.php, change the value of $authorizationstring to match your real github username and password.

4. Send the listrepos.php and listrepos.confs.php to your web server directory, the same you have setted to the downloadorupdaterepos. DONE!


Usage:

1. Navigate to the directory where you want to download all your repos;

2. Execute downloadorupdaterepos. DONE!
