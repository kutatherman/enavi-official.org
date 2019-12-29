<?php

use Illuminate\Support\Facades\App;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('signin', function () {
        return view('auth.signin');
    })->name('signin');

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('about', function () {
        notify()->success('Welcome to Laravel Notify ⚡️');
        return view('about');
    })->name('about');

    Route::get('leftSidebar', function () {
        return view('sidebar-left');
    })->name('leftSidebar');

    Route::get('rightSidebar', function () {
        return view('sidebar-right');
    })->name('rightSidebar');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});
