<?php

// */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// // });
// Route::apiResource('/class' , 'ClassController');
// Route::apiResource('/subject' , 'SubjectController');

Route::apiResource('/post' , 'DatapostController');
Route::apiResource('/subject' , 'SubjectController');
Route::apiResource('/code' , 'CodeController');
Route::apiResource('/section' , 'SectionController');
Route::apiResource('/student' , 'StudentController');



Route::group([


    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('payload', 'AuthController@payload');
    Route::post('register', 'AuthController@register');

});

