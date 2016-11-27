<?php

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/uploads', 'UploadsController@index')->name('uploads');
    Route::get('/uploads/new', 'UploadsController@create');
    Route::post('/uploads', 'UploadsController@store');
    Route::get('/uploads/{upload}', 'UploadsController@show');
    Route::get('/uploads/{upload}/download', 'UploadsController@download')
        ->name('uploadDownload');

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/patients', 'ScreeningsController@index')->name('patients');
        Route::get('/patients/{cnp}', 'ScreeningsController@show');
        Route::get('/users', 'UsersController@index')->name('users');
    });
});


