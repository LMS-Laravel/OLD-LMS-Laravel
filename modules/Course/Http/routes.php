<?php

Route::group(['prefix' => 'course', 'namespace' => 'Modules\Course\Http\Controllers'], function()
{
	Route::get('/', 'CourseController@index');
});