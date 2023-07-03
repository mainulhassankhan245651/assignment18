composer create-project laravel/laravel assignment18
.env edit with      DB_DATABASE=assignment18
open php my-admin  creat Data base Name assignment18
php artisan make:migration create_categories_table
php artisan make:model Category
php artisan make:controller Category
php artisan make:migration add_foreign_key_to_posts_table --table=posts
php artisan migrate
