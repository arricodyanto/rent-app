<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Getting Started

## Git Clone the Repository

1. Perform a git clone on the Laravel project repository from your Git platform (like GitHub or GitLab) to a local directory on your computer.

    ```sh
    git clone git@github.com:arricodyanto/rent-app.git
    ```

## Configure DB and The Project

1. Duplicate the .env.example file and rename one of them to .env

2. Look at the following lines of code
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
3. Change the code above according to the database you have. If you don't have a database yet, it will be created automatically.

4. Generate App Key
    ```sh
    php artisan key:generate
    ```

## Install Dependencies

1. Composer

    ```sh
    composer install
    ```

2. NPM
    ```sh
    npm install
    npm run build
    ```

## Migrations & seeds

1. Type the following command in your terminal. Make sure you have installed composer, php, and mysql
    ```sh
    php artisan migrate —seed
    ```

## Start the Developent Server

    ```sh
    php artisan serve
    ```

## Login with Accounts

1. Login as user with

    ```sh
    email: user@rentcar.com
    password: password
    ```

2. Login as admin with
    ```sh
    email: admin@rentcar.com
    password: password
    ```

## Enjoy!
