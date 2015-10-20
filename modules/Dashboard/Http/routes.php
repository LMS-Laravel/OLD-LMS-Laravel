<?php

Route::group(['namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', 'DashboardController@frontend');
});

Route::group(['prefix'=>'admin','namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', ['as' => 'dashboard.admin', 'uses' => 'DashboardController@backend']);
});