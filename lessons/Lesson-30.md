# Update records  
To create a patch form use `@method('PATCH')` decorator to indicate laravel that you want to use a patch form.
use the method `old('request value', [default value])` to assign a value to an input and persist the old request value.