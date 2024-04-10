<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# ![Laravel Example App](logo.png)

[![Build Status](https://img.shields.io/travis/gothinkster/laravel-realworld-example-app/master.svg)](https://travis-ci.org/gothinkster/laravel-realworld-example-app) [![Gitter](https://img.shields.io/gitter/room/realworld-dev/laravel.svg)](https://gitter.im/realworld-dev/laravel) [![GitHub stars](https://img.shields.io/github/stars/gothinkster/laravel-realworld-example-app.svg)](https://github.com/gothinkster/laravel-realworld-example-app/stargazers) [![GitHub license](https://img.shields.io/github/license/gothinkster/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/gothinkster/laravel-realworld-example-app/master/LICENSE)

> ### Example Laravel codebase containing real world examples (CRUD, auth, advanced patterns and more) that adheres to the [RealWorld] spec and API.

This repo is functionality complete — PRs and issues welcome!

----------

# Getting started

Clone the repository

    git clone https://github.com/prog4444/blog.git

Switch to the repo folder

    cd laravel

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (Set the database connection in .env before migrating)

    php artisan passport:install
    php artisan migrate
    php artisan db:seed

Start the local development server

Start the local development server

    npm run dev
    php artisan serve

You can now access the server at http://localhost:8000

    http://localhost:8000/api/documentation
    http://localhost:8000/show

TL;DR command list

    git clone https://github.com/prog4444/blog.git
    cd laravel
    composer install
    cp .env.example .env
    
    
Make sure you set the correct database connection information before running the migrations [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
