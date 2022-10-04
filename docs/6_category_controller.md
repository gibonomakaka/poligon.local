Контроллер категорий

Создание контроллера
php artisan make:controller Blog/Admin/CategoryController --resource

Создание маршрутов

web.php
...
Route::resource('categories', 'CategoryController')
    ->only($methods)
    ->names('blog.admin.categories');
...

