<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
	Route::get('/login', ['as' => 'auth.loginGet', 'uses' => 'AuthController@index']);
    Route::post('/login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);

    Route::resource('permission', 'PermissionController');
    Route::resource('role', 'RoleController');
    Route::resource('user', 'UserController');
    Route::post('/user/change-password', ['as' => 'user.change-password', 'uses' => 'UserController@changePassword']);
});