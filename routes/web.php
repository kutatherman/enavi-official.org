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
/*
    Route::get('contact', function () {
        return view('contact');
    })->name('contact');
*/
    /*Route::get('about', function () {
        smilify('success', 'Welcome to page about');
        return view('about');
    })->name('about');
*/


    Route::get('teamMembers', function () {
        return view('teamMembers');
    })->name('teamMembers');

    //Route::get('/teamMembers', 'TeamController@create')->name('teams.create');

    /**
    Route::resource('dashboard', 'DashboardController');

    Route::get('/about', 'DashboardController@about')->name('about');
    Route::get('/contact', 'DashboardController@contact')->name('contact');
    Route::get('/createMember', 'DashboardController@create')->name('createMember');
    Route::post('/contact/store', 'DashboardController@contactStore')->name('contact.store');
    Route::post('/contact/delete', 'DashboardController@delete');
    Route::post('/contact/update', 'DashboardController@update');
     **/



    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    /** if authenticated **/

   // Route::get('/admin',  'DashboardController@show')->name('admin');

    /** Posts route*/
//    Route::get('/posts/create', 'PostController@create')->name('posts.create');
//    Route::post('/posts', 'PostController@store')->name('posts.store');
//
//    /** Teams routes*/
//    Route::get('/teams/create', 'TeamController@create')->name('teams.create');
//    //Route::get('/teams', 'TeamController@show')->name('teams.show');
//    Route::post('/teams', 'TeamController@store')->name('teams.store');


    Route::get('dashboard','DashboardController@index');
    Route::post('dashboard','DashboardController@postStore')->name('postStore');
    Route::get('dashboard/data','DashboardController@getData')->name('getData');
    Route::post('dashboard/update','DashboardController@postUpdate')->name('postUpdate');
    Route::post('dashboard/delete','DashboardController@postDelete')->name('postDelete');

    Route::get('dashboard/about','DashboardController@about')->name('dashboard.about');
    Route::get('dashboard/index','DashboardController@index')->name('dashboard.index');
    Route::get('dashboard/contact','DashboardController@contact')->name('dashboard.contact');
    Route::get('dashboard/createMember','DashboardController@create')->name('createMember');


});

