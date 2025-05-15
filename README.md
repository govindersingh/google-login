
# Google social login using php

```
git clone https://github.com/govindersingh/google-login.git
```
```
cd google-login
```
```
composer install
```

### Download client_secret.json file from google console and add on project root. (update file name as mentioned)

```
Reference Docs: https://googleapis.github.io/google-api-php-client/
```

## Steps for google console configuration.

```
1. login google console using: https://console.cloud.google.com/
2. create new project
3. Once the project has been created, select OAuth consent screen in the left hand side navigation menu.
4. Select the External option:
5. once complete save and download json file.
6. Make sure you added redirect url properly. for example (in my case): http://localhost:8000/google-oauth.php
7. Create a file client_secret.json at root of project
8. Copy content from downloaded json and paste in client_secret.json
```

### Run appache and execute command at root project

```
php -S localhost:8000
```

### Ready to go : http://localhost:8000/login.php
