
# Role And Permission Checker

Simple package to be use in our system to handle role and permission without adding custom code in every project . 




## Features

- Admin Permission Role Route Middleware
- Has Role And Permission Trait
## Usage/Examples

Route Middleware 
```
# for single role or permission
Route::get('/service-list', ServiceList::class)->middleware('admin-role-permission:admin')

# for multiple role or permission
Route::get('/service-list', ServiceList::class)->middleware('admin-role-permission:admin|editor|can-edit|can-delete')
```

Trait 
```
# use the trait in user model or any model that use as guard provider

use Killallskywalker\TnbrMiddleware\Traits\HasRoleAndPermission;

class User {
    use HasRoleAndPermission;
}

# for single role to use it with auth you just can 
auth()->user()->hasRole('singleRole');

# for multiple role to use it with auth you just can 
auth()->user()->hasAnyRole(['roleA','roleB']);

# for permission you can use like this
auth()->user()->hasPermission('permissionA');

```