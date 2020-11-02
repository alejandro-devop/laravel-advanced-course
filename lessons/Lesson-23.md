## Migrations
Allows to create and modify the database using a version control. 
Each migration creates or execute a single database modification. 

> Each migration extends from `Illuminate\Database\Migrations\Migration`  class

> Each migration has the method up (to create the table, add or remove fields), and the method down (To rollback the migration), it execute the opposite actions from the up method. 

### Database fields
* bigIncrements
* string
* timestamp
* remembertoken

---
## Commands
*Run migrations*
```
php artisan migrate
```
*Rollback migraitons*
```
php artisan migrate:rollback
# Rollback only the last  migration
php artisan migrate:rollback --step=-1
```
*Remove all the tables and run migrations again*
```
# Be careful with this command.
php artisan migrate:fresh
```

*Create migrations*
```
php artisan make:migration [migration name] 
php artisan make:migration [migration name] --create [table name]
php artisan make:migration [migration name] --table [table to edit]
```
