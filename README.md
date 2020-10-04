# DT173G - Projekt - Server

Servern är byggd med Laravel med middleware som konverterar allt till JSON.

Laravel hämtar information ifrån en MySQL databas.

## Todo

* [X] Skapa tabeller
* [ ] Fyll tabeller med data
* [ ] Få ut data via API
* [ ] Fixa authentication för att kunna administrera inlägg
* [ ] Administration av inlägg

## Development notes

https://laravel.com/docs/8.x/pagination

https://laravel.com/docs/8.x/migrations

https://laravel.com/docs/8.x/seeding

https://medium.com/@tsubasakondo_36683/make-laravel-api-only-2da47a0f92b7

https://github.com/fruitcake/laravel-cors

## Design

DB <-> Laravel <-> Klient

### DB

Courses (från Moment 5)

Jobs: id(int), name, description, date(DATE)

Sites: id(int), name, url, description, source
