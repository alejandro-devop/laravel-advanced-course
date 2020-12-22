# Login and register
To create an auth system you have to follow the next steps
```
composer require laravel/ui
php artisan ui vue --auth
npm install
npm run dev 
```
Use directive `@auth @endauth` to check if a user is authenticated
Use directive `@guest @endguest` to check if a user is not authenticated