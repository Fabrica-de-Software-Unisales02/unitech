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
Then is needed to configure some database and smtp things on .env file
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
npm run dev
```

## Step 2
Now, just use the comand to run the server on localhost:8000
```
php artisan serve
```
