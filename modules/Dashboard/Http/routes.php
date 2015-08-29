<?php

Route::group(['namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', 'DashboardController@frontend');
});