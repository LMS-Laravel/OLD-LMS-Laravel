<?php

Route::group(['prefix' => 'dashboard', 'namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', 'DashboardController@index');
});