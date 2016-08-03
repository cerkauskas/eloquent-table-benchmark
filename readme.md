# Laravel PHP Framework with Developer tools

This is Laravel with some added convenience for developer.

## Additions
### Installed packages
* barryvdh/laravel-debugbar
* barryvdh/laravel-ide-helper
* doctrine/dbal

### Commands
This instance has a command for generating helper files for PhpStorm. All you need to do is call `php artisan dev:gen` command and you are ready to go!

## Installation
**Step 1**: clone repository's `cerkauskas/dev` branch
> git clone -b cerkauskas/dev https://github.com/cerkauskas/laravel.git my-project

**Step 2**: install dependencies
> composer install

**Step 3**: make .env
> cp .env.example .env

**Step 4**: generate key
> php artisan key:generate

**Step 5**: enjoy!