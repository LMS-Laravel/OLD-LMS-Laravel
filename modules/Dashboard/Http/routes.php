<?php

Route::group(['namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', 'DashboardController@frontend');
	Route::get('/admin', ['as'=>'dashboard.learning', 'uses'=>'DashboardController@admin']);
});