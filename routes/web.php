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

    Route::get('teamMembers', function () {
        return view('teamMembers');
    })->name('teamMembers');


    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    /** Operation route */
    Route::post('dashboard','DashboardController@postStore')->name('postStore');
    Route::get('dashboard/data','DashboardController@getData')->name('getData');
    Route::post('dashboard/delete','DashboardController@postDelete')->name('postDelete');
    Route::get('dashboard/{team}/edit','DashboardController@postEdit')->name('postEdit');
    Route::put('dashboard/{team}','DashboardController@postUpdate')->name('postUpdate');
    Route::delete('dashboard/{team}','DashboardController@delete')->name('postDelete');
    Route::post('dashboard/contact','DashboardController@contactStore')->name('contactStore');

    /** Show routes */
    Route::get('dashboard','DashboardController@index');
    Route::get('dashboard/about','DashboardController@about')->name('dashboard.about');
    Route::get('dashboard/index','DashboardController@index')->name('dashboard.index');
    Route::get('dashboard/contact','DashboardController@contact')->name('dashboard.contact');
    Route::get('dashboard/createMember','DashboardController@create')->name('createMember');
    Route::get('dashboard/{team}','DashboardController@show')->name('dashboard.show');
    Route::get('donate','DashboardController@donate')->name('dashboard.donate');

    /** Contact Posts controller */
    //Route::resource('contactPost', 'ContactPostController');

});

