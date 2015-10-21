<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
	Route::get('/login', ['as' => 'auth.loginGet', 'uses' => 'AuthController@index']);
    Route::post('/login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);

    Route::post('/user/change-password', ['as' => 'user.change-password', 'uses' => 'Admin\UserController@changePassword']);
});

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\User\Http\Controllers\Admin'], function(){

    Route::resource('user', 'UserController');
    Route::resource('permission', 'PermissionController');
    Route::resource('role', 'RoleController');

});

/*Route::group(['prefix' => 'learning', 'namespace' => 'Modules\User\Http\Controllers\Learning'], function(){

    Route::resource('user', 'UserController');

});*/