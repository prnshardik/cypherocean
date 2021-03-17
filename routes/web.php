<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Front'], function(){
    Route::get('/', 'MainController@index')->name('index');
    Route::get('about', 'MainController@about')->name('about');
    Route::get('web_development', 'MainController@web_development')->name('web_development');
    Route::get('app_development', 'MainController@app_development')->name('app_development');
    Route::get('uiux_design', 'MainController@uiux_design')->name('uiux_design');
    Route::get('logo_design', 'MainController@logo_design')->name('logo_design');
    Route::get('portfolio', 'MainController@portfolio')->name('portfolio');
    Route::get('contact', 'MainController@contact')->name('contact');
    Route::post('contact_us', 'MainController@contact_us')->name('contact_us');
});

Route::group(['middleware' => 'prevent-back-history', 'namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function(){
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/', 'AuthController@login')->name('login');
        Route::post('signin', 'AuthController@signin')->name('signin');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::get('home', 'HomeController@index')->name('home');
        Route::get('page', 'HomeController@page')->name('page');
    });
});