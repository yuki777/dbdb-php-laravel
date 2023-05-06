# Examples for [dbdb-php](https://github.com/yuki777/dbdb-php) on Laravel
## Clone
```bash
git clone git@github.com:yuki777/dbdb-php-laravel
cd dbdb-php-laravel
```

## Install
```bash
composer install
```

## Setup
```bash
cp .env.example .env
php artisan key:generate
```

## Create databases by DBDB
```bash
# Create mysql
composer dbdb:mysql create-start --db-name=my-mysql-5 --db-version=8.0.30 --db-port=3306

# Create redis
composer dbdb:redis create-start --db-name=my-redis-6 --db-version=6.2.6 --db-port=6379

# Show databases
composer dbdb:list
```

## Tests
```bash
php artisan migrate --force
php artisan test
```

## CI
- [GitHub Actions example](https://github.com/yuki777/dbdb-php-laravel/blob/main/.github/workflows/test.yaml#L23-L26) and [result](https://github.com/yuki777/dbdb-php-laravel/actions/runs/4900133225/jobs/8750582150)
