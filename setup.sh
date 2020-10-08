composer update
cp .env.example .env
php artisan key:generate
php artisan migrate

phpunit

php -S 127.0.0.1:9999 -t public
