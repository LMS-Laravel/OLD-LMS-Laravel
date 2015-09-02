<?php

Route::group(['prefix' => 'learning', 'namespace' => 'Modules\Course\Http\Controllers\Learning'], function(){

    Route::get('/', ['as'=>'dashboard.learning', 'uses'=>'CourseController@index']);

    Route::resource('course', 'CourseController',
        [
            'except' => ['create', 'store', 'update', 'destroy']
        ]
    );

    Route::resource('lesson', 'LessonController',
        [
            'except' => ['index','create', 'store', 'update', 'destroy']
        ]
    );

    Route::resource('comment', 'CommentController',
        [
            'except' => ['index','create', 'update']
        ]
    );
});

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Course\Http\Controllers\Admin'], function(){

    Route::resource('course', 'CourseController',
        ['except' => ['create', 'store', 'update', 'destroy']]
    );

});
