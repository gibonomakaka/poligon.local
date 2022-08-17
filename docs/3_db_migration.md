1. Создание БД
CREATE SCHEMA `poligon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

2. Создание моделей категорий, статей + Миграции
содаются 2 модели: "BlogCategoryes" и "BlogPosts"

php artisan make:model Models/BlogCategory -m
php artisan make:model Models/BlogPost -m

-m Создание миграции (migrations)
расположение: database/migrations

Class Migration

up() - вызывается при вызове миграции;
down() - откат миграции (удаление таблицы, если такая существует);

- запуск миграции: php artisan migrate

При использовании БД MariaDB старше 10.2.2 или MySQL старше 5.7.7 необходимо в классе 
app/Providers/AppServiceProvider.php в методе boot() задать длину строки по-умолчанию 191 символ:

public function boot()
{
    Schema::defaultStringLength(191);
}

3. Создание засевок (seed)
Расположение файлов seed: database/seeds

php artisan make:seeder UsersTableSeeder
php artisan make:seeder BlogCategoriesTableSeeder

4. Запуск засевок (seeder)
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder (UsersTableSeeder - имя файла и класса)
php artisan migrate:refresh --seed
