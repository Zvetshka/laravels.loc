git clone https://github.com/Zvetshka/laravel.loc.git   

cd laravel.loc
composer install

cp .env.example .env

php artisan key:generate

DB_CONNECTION=mysql
DB_HOST-127.0.0.1
DB_PORT=3306
DB_DATABASE=Имя_БД
DB_USERNAME=Ваш_логин_от_БД
DB_PASSWORD=Ваш_пароль_от_БД
SESSION_DRIVER=file

composer create-projet laravel/laravel .
php artisan install:api
php artisan config:publish cors
php artisan storage:link

RewriteEngine on
RewriteRule ^(.*)$ public/$1 [L]
