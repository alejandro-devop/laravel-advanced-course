# Eloquent, get single record
```
# Using the method `find` you can fetch a single record
Model::find($id); // Id is the record  pk.

# You can also use the method `findOrFail` to return an exception in case
# the record does not exists.

Model::findOrFail($id);
```