# Order List

## Technologies used

### Frontend
- Jquery
- Bootstrap
- Sass

### Backend
- PHp
- Laravel
- Jwt-Auth
- MySql
___

## Prerequisites
- Php 7.4
    - remembering to uncomment these extensions in the php.ini file
        - curl
        - fileinfo
        - mbstring
        - openssl
        - pdo_mysql
- Composer
- MySql
- NodeJs

___

## How to use?

## Step 1
The first step is to download the project, for this you can copy the code below and run it in your GIT terminal

```
git clone git@github.com:Fabrica-de-Software-Unisales/unitech.git
```
____

## Step 2
### BACKEND
#### Step 1
With PHP and Composer installed, lets install laravel dependencies with the commands
```
composer install
cp .env.example .env
php artisan key:generate
```
#### Step 2
Then is needed to configure some database and smtp things on .env file (other important variables to configure are APP_NAME, APP_ENV, APP_KEY, APP_DEBUG, APP_URL)<br>
read: https://laravel.com/docs/9.x/configuration for more details
```
sudo nano .env
```
Then is possible to build the database structure running
```
php artisan migrate --seed
```
#### Step 3
Aubsequently let's generate a key for jwt
```
php artisan jwt:secret
```

### FRONTEND
Afterwords with NodeJs installed, just run the commands and then laravelmix will display some instructions
```
npm install
```
and
```
npm run dev
```
or on production server
```
npm run prod
```

## Step 4
Now, just use the comand to run the server on localhost:8000
```
php artisan serve
```
if you are looking to run the application in a production environment with apache2 you can follow further instructions at:<br> 
https://www.hostinger.com.br/tutoriais/como-instalar-laravel-ubuntu
_____

## EndPoints
The `php artisan route:list` command can be used to show a list of all the registered routes for the application.<p>
The routes can also be consulted on Postman collection running
"unitech local dev.postman_collection.json" file<p>
All routes prefixed with `/admin` require Bearer Authentication token, which can be obtained from the api/Login route by sending user email and password.<p>
if you already have runned `php artisan migrate --seed` code, there are by default two admin users, one with email `UNITECH-RedesSociais@souunisales.com.br` and password `senha`, and the other with email `mschuster@salesiano.br` and password `senha`

___

## Email

At the moment smtp configuration on .env file is (using sendgrid service these values will be displayed for you)
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=465
MAIL_USERNAME=apikey
MAIL_PASSWORD=SG.RzO0L3zWRsapdO60OhKjkQ.0BjzUFQY9555SukmwnpRcbLDRbMIsnPLSVxwhVz>
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=Izael.Silva@souunisales.com.br
MAIL_FROM_NAME="${APP_NAME}"
```

Emails are sent to each user's emails which can be managed by routes `api/user` or `api/admin/user`

The views of the emails can be managed on `resources/views/emails` folder
...

if you are looking to run the application in a production environment with apache2 you can follow further instructions at:
https://www.hostinger.com.br/tutoriais/como-instalar-laravel-ubuntu
