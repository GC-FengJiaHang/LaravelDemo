# LaravelDemo
LaravelDemo

composer create-project laravel/laravel:^6.20.1 laravelDemoApp
cd laravelDemoApp

-- composer global require laravel:^6.20.1/installer

php artisan key:generate
php artisan serve  --port=8000


php artisan make:controller StudentController
设置路由 web.php: Route::get('student/index', 'StudentController@index');  

windows： php.ini 设置
extension=pdo_mysql
extension=mysqli

php artisan make:migration create_student_table --create=student
php artisan migrate
php artisan migrate:reset
php artisan migrate:refresh --seeder=StudentSeeder

php artisan make:model Student




热加载方式：
1. node环境 Laravel Mix 是一个构建工具，默认集成在 Laravel 中，结合 Browsersync 可以自动检测文件变化并刷新浏览器。
   npm install browser-sync --save-dev
   自带Laravel Mix + browser-sync （node环境）
2. nginx + Laravel Mix + browser-sync
3. Laravel Artisan Serve + Laravel Mix + browser-sync 


php artisan make:seeder StudentSeeder
php artisan make:factory StudentFactory --model=Student
php artisan db:seed --class=StudentSeeder

$factory->define 是 Laravel 7 及之前版本的工厂定义方式，通过全局 $factory 变量定义假数据生成规则。
class StudentFactory extends Factory 是 Laravel 8 及之后版本的工厂定义方式，基于类定义，支持更好的可扩展性和可维护性。

