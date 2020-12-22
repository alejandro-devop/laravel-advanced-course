# Route resource
### Commands
```
# list application routes
php artisan route:list

# list application routes filtering name
php artisan route:list --name="some name"

```

### Specify the route names and parameters
```
Route::resource('portafolio', ProjectController::class)->names('projects')->parameters(['portafolio' => 'project']);
```