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
    Route::post('review-store','MainController@review_store')->name('review_store');
    Route::post('contact-store', 'MainController@contact_store')->name('contact_store');
});

Route::group(['middleware' => 'prevent-back-history', 'namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function(){
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/', 'AuthController@login')->name('login');
        Route::post('signin', 'AuthController@signin')->name('signin');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::get('dashboard', 'HomeController@index')->name('home');
        Route::get('page', 'HomeController@page')->name('page');
        
        //-- User --//
            Route::any('users', 'UsersController@index')->name('users');
            Route::any('users-view', 'UsersController@view')->name('users.view');
            Route::any('usres-edit', 'UsersController@edit')->name('users.edit');
            Route::any('usres-status', 'UsersController@change_status')->name('users.change.status');
        //-- User --//

        //-- Notification --//
            Route::any('notification', 'NotificationController@index')->name('notification');
            Route::get('notification-view', 'NotificationController@view')->name('notification.view');
            Route::post('notification-status', 'NotificationController@status')->name('notification.status');
            Route::any('notification-delete', 'NotificationController@delete')->name('notification.delete');
        //-- Notification --//
    });
});