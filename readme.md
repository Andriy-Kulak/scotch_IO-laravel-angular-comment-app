# Laravel and Angular Single Page Comment App (using Laravel 5.0)

This is my implemantion of the Scotch.io's tutorial [Laravel and Angular Single Page Comment App](http://scotch.io/tutorials/php/create-a-laravel-and-angular-single-page-comment-application) using Laravel 5.0.

You can find the original repo based on Laravel 4.2 in [this repo](https://github.com/scotch-io/laravel-angular-comment-app)

There's also some slight changes on the front-end. I have changed the AngularJS version from 1.2.8 to 1.3.14, also I've changed the way controllers and services modules are created, and now it doesn't use JQuery to parse the data on the `POST` request to create a *comment*

## Installation

1. Clone the repo: `git clone git@github.com:daverivera/scotch_IO-laravel-angular-comment-app.git`
2. change directory: `cd scotch_IO-laravel-angular-comment-app/`
3. Install Laravel: `composer install --prefer-dist`
4. Change your database settings in `.env` as well as in `app/config/database.php`
5. Migrate your database: `php artisan migrate`
6. Seed your database: `php artisan db:seed`
8. Launch you application using the PHP's built-in server: `$ php artisan serve`
7. View your application in browser.
