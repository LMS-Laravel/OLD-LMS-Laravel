<?php

Route::group(['prefix' => '/', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
	Route::get('/', 'AuthController@index');
    Route::post('/auth/login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('/auth/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);

    Route::resource('auth/permission', 'PermissionController');
    Route::resource('auth/role', 'RoleController');
    Route::resource('auth/user', 'UserController');
    Route::post('/auth/user/change-password', ['as' => 'user.change-password', 'uses' => 'UserController@changePassword']);
});