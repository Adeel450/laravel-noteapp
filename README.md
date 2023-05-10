<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Note App
This is a simple note-taking application built with Laravel.

### Installation
Clone the repository to your local machine using the following command:


git clone https://github.com/favourdev1/laravel-noteapp.git

Navigate to the project directory and install the dependencies using Composer:


```bash
cd note-app
composer install
```





### Generate a new application key:
```bash
php artisan key:generate
```



### Database
Set up the database in the `.env` file: By default its set to `mysql`
```bash
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
### Run Migration
Run the database migrations:
```bash
php artisan migrate
```


### Server
Start the local development server:
```bash
php artisan serve
```
Open your web browser and navigate to http://localhost:8000 to view the application.

### Usage
The Note App allows you to create, read, update, and delete notes. To get started, simply create a new note by clicking the "New Note" button on the home page.
