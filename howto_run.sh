cp .env.example .env
php generate:key
php artisan migrate


php -S 127.0.0.1:9999 -t public
