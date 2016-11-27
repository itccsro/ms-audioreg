<?php

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/uploads', 'UploadsController@index');
    Route::get('/uploads/new', 'UploadsController@create');
    Route::post('/uploads', 'UploadsController@store');
    Route::get('/uploads/{id}', 'UploadsController@show');

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/patients', 'ScreeningsController@index');
        Route::get('/patients/{cnp}', 'ScreeningsController@show');
        Route::get('/users', 'UsersController@index');
    });
});


