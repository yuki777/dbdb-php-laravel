```
git clone git@github.com:yuki777/dbdb-php-laravel
cd dbdb-php-laravel
composer install
cp .env.example .env
php artisan key:generate
composer dbdb:mysql-create-start my-awesome-db 8.0.30 3306
composer dbdb:list
php artisan migrate --force
php artisan test
```
