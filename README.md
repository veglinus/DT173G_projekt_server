# DT173G - Projekt - Server

Servern är byggd med Laravel med middleware som konverterar allt till JSON.

Laravel hämtar information ifrån en MySQL databas.

## Todo

* [X] Skapa tabeller
* [X] Fyll tabeller med data - jobs kvar
* [X] Få ut data via API
* [ ] Fixa authentication i admin-requests
* [ ] Verufiera att allt funkar på en ny fresh install

## Running

Du måste först av allt ha Composer installerat. Installera composer här: https://getcomposer.org/

Starta en MySQL/MariaDB databas på din lokala server med standardport. Om du har några andra settings måste du ändra i .env filen som skapas av composer install. Ändra de settings som börjar med "DB_" till rätt efter du har kört composer install.

Kör följande kommandon i terminalen:
```
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```
Migrate skapar databasens tabeller. Seed fyller tabellerna med standarddata.
Serve kör en webbserver. Du kan även lägga in hela mappen i XAMPP/htdocs och köra den via XAMPP om du hellre vill det, eller direkt i en webbhsot.

## Development notes

```php artisan route:list``` Visar alla routes som finns tillgängliga
```php artisan migrate:fresh``` Tar bort databasen och återskapar den

Källor:
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
