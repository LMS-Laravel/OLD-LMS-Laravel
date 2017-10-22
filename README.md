# LMS-Laravel
[![Latest Stable Version](https://poser.pugx.org/lms-laravel/lms-laravel/v/stable)](https://packagist.org/packages/lms-laravel/lms-laravel)
[![Total Downloads](https://poser.pugx.org/lms-laravel/lms-laravel/downloads)](https://packagist.org/packages/lms-laravel/lms-laravel)
[![Latest Unstable Version](https://poser.pugx.org/lms-laravel/lms-laravel/v/unstable)](https://packagist.org/packages/lms-laravel/lms-laravel)
[![License](https://poser.pugx.org/lms-laravel/lms-laravel/license)](https://packagist.org/packages/lms-laravel/lms-laravel)

- [About](#about)
- [Installation](#installation)
- [Seeded Credentials](#seeded-credentials)
- [Screenshots](#screenshots)
- [Routes](#routes)
- [License](#license)

### About
LMS-laravel is a management system of educational content, want to facilitate the creation of a platform simple and intuitive.
LMS-laravel is based as its name indicates in the framework laravel 5, and uses various packages created by other developers.
* This application is still in development, if you want to collaborate with the development you can write to angelkurten@hotmail.com

### Installation
1. Run `git clone https://github.com/LMS-Laravel/LMS-Laravel.git LMS-Laravel`
2. From the projects root run `cp .env.example .env`
3. Configure your `.env` file
4. From the projects root run `php artisan app:install`
5. Configurate credentials mailgun in .env

### Seeded Credentials
-------------
* User: admin
* Pass: admin123

### Screenshots
![Test](http://i.imgur.com/JXj5WA3.png)

### Routes
```
+--------+--------------------------------+---------------------------------------------------------------------+-------------------------------+------------------------------------------------------------------------+------------+
| Domain | Method                         | URI                                                                 | Name                          | Action                                                                 | Middleware |
+--------+--------------------------------+---------------------------------------------------------------------+-------------------------------+------------------------------------------------------------------------+------------+
|        | GET|HEAD                       | /                                                                   | dashboard.frontend            | Modules\Dashboard\Http\Controllers\DashboardController@frontend        |            |
|        | GET|HEAD                       | admin                                                               | dashboard.admin               | Modules\Dashboard\Http\Controllers\DashboardController@backend         |            |
|        | GET|HEAD                       | admin/course                                                        | admin.course.index            | Modules\Course\Http\Controllers\Admin\CourseController@index           |            |
|        | GET|HEAD                       | admin/course/{course}                                               | admin.course.show             | Modules\Course\Http\Controllers\Admin\CourseController@show            |            |
|        | GET|HEAD                       | admin/course/{course}/edit                                          | admin.course.edit             | Modules\Course\Http\Controllers\Admin\CourseController@edit            |            |
|        | POST                           | admin/permission                                                    | admin.permission.store        | Modules\User\Http\Controllers\Admin\PermissionController@store         | auth       |
|        | GET|HEAD                       | admin/permission                                                    | admin.permission.index        | Modules\User\Http\Controllers\Admin\PermissionController@index         | auth       |
|        | GET|HEAD                       | admin/permission/create                                             | admin.permission.create       | Modules\User\Http\Controllers\Admin\PermissionController@create        | auth       |
|        | DELETE                         | admin/permission/{permission}                                       | admin.permission.destroy      | Modules\User\Http\Controllers\Admin\PermissionController@destroy       | auth       |
|        | PATCH                          | admin/permission/{permission}                                       |                               | Modules\User\Http\Controllers\Admin\PermissionController@update        | auth       |
|        | PUT                            | admin/permission/{permission}                                       | admin.permission.update       | Modules\User\Http\Controllers\Admin\PermissionController@update        | auth       |
|        | GET|HEAD                       | admin/permission/{permission}                                       | admin.permission.show         | Modules\User\Http\Controllers\Admin\PermissionController@show          | auth       |
|        | GET|HEAD                       | admin/permission/{permission}/edit                                  | admin.permission.edit         | Modules\User\Http\Controllers\Admin\PermissionController@edit          | auth       |
|        | GET|HEAD                       | admin/role                                                          | admin.role.index              | Modules\User\Http\Controllers\Admin\RoleController@index               | auth       |
|        | POST                           | admin/role                                                          | admin.role.store              | Modules\User\Http\Controllers\Admin\RoleController@store               | auth       |
|        | GET|HEAD                       | admin/role/create                                                   | admin.role.create             | Modules\User\Http\Controllers\Admin\RoleController@create              | auth       |
|        | PATCH                          | admin/role/{role}                                                   |                               | Modules\User\Http\Controllers\Admin\RoleController@update              | auth       |
|        | DELETE                         | admin/role/{role}                                                   | admin.role.destroy            | Modules\User\Http\Controllers\Admin\RoleController@destroy             | auth       |
|        | GET|HEAD                       | admin/role/{role}                                                   | admin.role.show               | Modules\User\Http\Controllers\Admin\RoleController@show                | auth       |
|        | PUT                            | admin/role/{role}                                                   | admin.role.update             | Modules\User\Http\Controllers\Admin\RoleController@update              | auth       |
|        | GET|HEAD                       | admin/role/{role}/edit                                              | admin.role.edit               | Modules\User\Http\Controllers\Admin\RoleController@edit                | auth       |
|        | POST                           | admin/user                                                          | admin.user.store              | Modules\User\Http\Controllers\Admin\UserController@store               | auth       |
|        | GET|HEAD                       | admin/user                                                          | admin.user.index              | Modules\User\Http\Controllers\Admin\UserController@index               | auth       |
|        | GET|HEAD                       | admin/user/create                                                   | admin.user.create             | Modules\User\Http\Controllers\Admin\UserController@create              | auth       |
|        | DELETE                         | admin/user/{user}                                                   | admin.user.destroy            | Modules\User\Http\Controllers\Admin\UserController@destroy             | auth       |
|        | PUT                            | admin/user/{user}                                                   | admin.user.update             | Modules\User\Http\Controllers\Admin\UserController@update              | auth       |
|        | GET|HEAD                       | admin/user/{user}                                                   | admin.user.show               | Modules\User\Http\Controllers\Admin\UserController@show                | auth       |
|        | PATCH                          | admin/user/{user}                                                   |                               | Modules\User\Http\Controllers\Admin\UserController@update              | auth       |
|        | GET|HEAD                       | admin/user/{user}/edit                                              | admin.user.edit               | Modules\User\Http\Controllers\Admin\UserController@edit                | auth       |
|        | GET|HEAD                       | auth/login                                                          | auth.loginGet                 | Modules\User\Http\Controllers\Auth\AuthController@index                | guest      |
|        | POST                           | auth/login                                                          | auth.login                    | Modules\User\Http\Controllers\Auth\AuthController@postLogin            | guest      |
|        | GET|HEAD                       | auth/logout                                                         | auth.logout                   | Modules\User\Http\Controllers\Auth\AuthController@getLogout            |            |
|        | GET|HEAD                       | auth/password/email/{one?}/{two?}/{three?}/{four?}/{five?}          | auth.reset.password.getEmail  | Modules\User\Http\Controllers\Auth\PasswordController@getEmail         | guest      |
|        | POST                           | auth/password/email/{one?}/{two?}/{three?}/{four?}/{five?}          | auth.reset.password.postEmail | Modules\User\Http\Controllers\Auth\PasswordController@postEmail        | guest      |
|        | POST                           | auth/password/reset/{one?}/{two?}/{three?}/{four?}/{five?}          | auth.reset.password.postReset | Modules\User\Http\Controllers\Auth\PasswordController@postReset        | guest      |
|        | GET|HEAD                       | auth/password/reset/{one?}/{two?}/{three?}/{four?}/{five?}          | auth.reset.password.getReset  | Modules\User\Http\Controllers\Auth\PasswordController@getReset         | guest      |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | auth/password/{_missing}                                            |                               | Modules\User\Http\Controllers\Auth\PasswordController@missingMethod    | guest      |
|        | GET|HEAD                       | auth/register                                                       | auth.get.register             | Modules\User\Http\Controllers\Auth\AuthController@getRegister          | guest      |
|        | POST                           | auth/register                                                       | auth.post.register            | Modules\User\Http\Controllers\Auth\AuthController@postRegister         | guest      |
|        | POST                           | auth/user/change-password                                           | user.change-password          | Modules\User\Http\Controllers\Admin\UserController@changePassword      | auth       |
|        | GET|HEAD                       | learning                                                            | dashboard.learning            | Modules\Dashboard\Http\Controllers\DashboardController@learning        | auth       |
|        | POST                           | learning/comment                                                    | learning.comment.store        | Modules\Course\Http\Controllers\Learning\CommentController@store       | auth       |
|        | GET|HEAD                       | learning/course                                                     | learning.course.index         | Modules\Course\Http\Controllers\Learning\CourseController@index        | auth       |
|        | GET|HEAD                       | learning/course/{course}                                            | learning.course.show          | Modules\Course\Http\Controllers\Learning\CourseController@show         | auth       |
|        | GET|HEAD                       | learning/lesson                                                     | learning.lesson.index         | Modules\Course\Http\Controllers\Learning\LessonController@index        | auth       |
|        | GET|HEAD                       | learning/lesson/{lesson}                                            | learning.lesson.show          | Modules\Course\Http\Controllers\Learning\LessonController@show         | auth       |
|        | GET|HEAD                       | learning/user/profile/{one?}/{two?}/{three?}/{four?}/{five?}        | learning.user.profile         | Modules\User\Http\Controllers\Learning\UserController@getProfile       | auth       |
|        | PUT                            | learning/user/profile/{one?}/{two?}/{three?}/{four?}/{five?}        | learning.user.update.profile  | Modules\User\Http\Controllers\Learning\UserController@putProfile       | auth       |
|        | GET|HEAD                       | learning/user/public-profile/{one?}/{two?}/{three?}/{four?}/{five?} |                               | Modules\User\Http\Controllers\Learning\UserController@getPublicProfile | auth       |
|        | GET|HEAD                       | learning/user/public/{id}                                           | learning.user.profile.public  | Modules\User\Http\Controllers\Learning\UserController@getPublicProfile |            |
|        | GET|HEAD                       | learning/user/ranking/{one?}/{two?}/{three?}/{four?}/{five?}        | learning.user.ranking         | Modules\User\Http\Controllers\Learning\UserController@getRanking       | auth       |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | learning/user/{_missing}                                            |                               | Modules\User\Http\Controllers\Learning\UserController@missingMethod    | auth       |
+--------+--------------------------------+---------------------------------------------------------------------+-------------------------------+------------------------------------------------------------------------+------------+
```

### Laravel Auth License
LMS-Laravel is licensed under the MIT license. Enjoy!
