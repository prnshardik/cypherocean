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
    Route::get("portfolio_single/{id?}", "MainController@portfolio_single")->name('portfolio_single');
});

Route::group(['middleware' => 'prevent-back-history', 'namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function(){
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/', 'AuthController@login')->name('login');
        Route::post('signin', 'AuthController@signin')->name('signin');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::get('dashboard', 'HomeController@index')->name('home');

        //-- User --//
            Route::any('users', 'UsersController@index')->name('users');
            Route::any('users/view', 'UsersController@view')->name('users.view');
            Route::any('users-edit', 'UsersController@edit')->name('users.edit');
            Route::post('users-update', 'UsersController@update')->name('users.update');
            Route::any('users-status', 'UsersController@change_status')->name('users.change.status');
        //-- User --//

        //-- Notification --//
            Route::any('notification', 'NotificationController@index')->name('notification');
            Route::get('notification-view', 'NotificationController@view')->name('notification.view');
            Route::post('notification-status', 'NotificationController@status')->name('notification.status');
            Route::any('notification-delete', 'NotificationController@delete')->name('notification.delete');
        //-- Notification --//

        //-- Review --//
            Route::any('review', 'ReviewController@index')->name('review');
            Route::get('review-view', 'ReviewController@view')->name('review.view');
            Route::post('review-update', 'ReviewController@update')->name('review.update');
            Route::post('review-status', 'ReviewController@status')->name('review.status');
            Route::any('review-delete', 'ReviewController@delete')->name('review.delete');
        //-- Review --//

        //-- Portfolio --//
            Route::any('portfolio', 'PortfolioController@index')->name('portfolio');
            Route::get('portfolio/create', 'PortfolioController@create')->name('portfolio.create');
            Route::post('portfolio/insert', 'PortfolioController@insert')->name('portfolio.insert');
            Route::get('portfolio/view', 'PortfolioController@view')->name('portfolio.view');
            Route::get('portfolio/edit', 'PortfolioController@edit')->name('portfolio.edit');
            Route::patch('portfolio/update/{id?}', 'PortfolioController@update')->name('portfolio.update');
            Route::post('portfolio/status', 'PortfolioController@status')->name('portfolio.status');
            Route::post("portfolio/image-remove", "PortfolioController@image_remove")->name('portfolio.image.remove');
        //-- Portfolio --//
    });
});