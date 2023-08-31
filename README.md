# Game Items API

## Prerequisites

- PHP 8.1.2
- Composer 2.5.8
- Node.js 18.17.1

## How to use

1. Clone this repository
2. Run `cp .env.example .env`
3. Run `composer install && npm install`
4. Run `php artisan key:generate`
5. Run `./vendor/bin/sail up -d`
6. Run `./vendor/bin/sail artisan migrate`
7. Run `./vendor/bin/sail artisan db:seed`
8. Import `game-items-api.postman_collection.json` to Postman
9. Run the collection to test the API

You also can browse the database on [phpmyadmin](http://localhost:8080/index.php?route=/database/structure&db=game_items_api)
