## Requirements

- php 8.1
- make sure inl extension in enabled in your php.ini file if using xampp, check link below
https://arjunphp.com/install-intl-extension-xampp/
## Installation

### clone the repo
``` bash
git clone https://github.com/AmrSaleh2234/ladun-prod.git ladun
```
### go into app's directory
``` bash
cd ladun
```
### install app's dependencies
``` bash
composer install
```
### create new database ladun

### add .env file update DB_DATABASE=ladun
``` bash
php artisan migrate --seed
```
### generate key
``` bash
php artisan key:generate
```
### generate key
``` bash
php artisan storage:link
```
### run php artisan serve
``` bash
php artisan serve
```
### run npm install
``` bash
npm install
```
### run npm run dev
``` bash
npm run dev
```

## Dashboard
### open browser in localhost:8000/admin/login
### email: admin@admin.com
### password: password
## Website
### open browser in localhost:8000
