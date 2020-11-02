# Eloquent
Two ways to fetch data from  db
*One using directly the db manager*
```
use DB;
$data = DB::table('table')->get();
```
*Two using the ORM eloquent.*
===

# Commands
*Create model*
```
php artisan make:model [ModelName]
# Create model with migration
php artisan make:modael [ModelName] -m
```
