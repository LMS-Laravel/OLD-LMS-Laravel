<?php

Route::group(['prefix' => 'learning'], function(){

    Route::get('/', 'CourseController@index');

	Route::group(['prefix' => 'course', 'namespace' => 'Modules\Course\Http\Controllers'], function()
	{
		Route::get('/', 'CourseController@index');
	});
});

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'course', 'namespace' => 'Modules\Course\Http\Controllers'], function()
    {
        Route::get('/', 'CourseController@index');
    });
});
