<?php

Route::group(['namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', 'DashboardController@frontend');
	Route::get('/learning', ['as'=>'dashboard.learning', 'uses'=>'DashboardController@learning']);
});