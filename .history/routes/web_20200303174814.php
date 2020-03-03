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
    Route::post('dashboard/staff','DashboardController@staffStore')->name('staffStore');
    Route::post('dashboard','DashboardController@postStore')->name('postStore');
    Route::get('dashboard/data','DashboardController@getData')->name('getData');
    Route::post('dashboard/delete','DashboardController@postDelete')->name('postDelete');
    Route::get('dashboard/{team}/edit','DashboardController@postEdit')->name('postEdit');
    Route::put('dashboard/{team}','DashboardController@postUpdate')->name('postUpdate');
    Route::delete('dashboard/{team}','DashboardController@delete')->name('postDelete');
    Route::delete('dashboard/staff/{staff}','DashboardController@deleteStaff')->name('deleteStaff');
    Route::delete('dashboard/contact/{msgDelete}','DashboardController@deleteMsg')->name('msgDelete');
    Route::delete('dashboard/contact/msgDeleteAll','DashboardController@deleteAllMsg')->name('msgDeleteAll');
    Route::post('dashboard/contact','DashboardController@contactStore')->name('contactStore');

    /** Show routes */
    Route::get('dashboard','DashboardController@index');
    Route::get('dashboard/about','DashboardController@about')->name('dashboard.about');
    Route::get('dashboard/index','DashboardController@index')->name('dashboard.index');
    Route::get('dashboard/index/staff','DashboardController@indexStaff')->name('dashboard.staff');
    Route::get('dashboard/contact','DashboardController@contactCreate')->name('dashboard.contact');
    Route::get('dashboard/contact/show','DashboardController@contactIndex')->name('dashboard.contactIndex');
    Route::get('dashboard/createMember','DashboardController@create')->name('createMember');
    Route::get('dashboard/createStaff','DashboardController@createStaff')->name('createStaff');
    Route::get('dashboard/{team}','DashboardController@show')->name('dashboard.show');
    Route::get('dashboard/staff/{staff}','DashboardController@showStaff')->name('dashboard.showStaff');
    Route::get('donate','DashboardController@donate')->name('dashboard.donate');

    /** GALLERIES */
    //Route::get('galleryIndex','DashboardController@galleryIndex')->name('gallery');
    Route::get('galleryIndex1','DashboardController@galleryIndex1')->name('gallery1');
    Route::get('galleryIndex3','DashboardController@galleryIndex3')->name('gallery3');
    Route::get('galleryIndex4','DashboardController@galleryIndex4')->name('gallery4');


    Route::get('galleryIndex','GalleryController@galleryIndex')->name('gallery');
    Route::get('galleryCreate','GalleryController@create')->name('galleryCreate');
    Route::post('gallery/store','GalleryController@store')->name('gallerystore');
   // Route::get('galleryShow','GalleryController@show')->name('galleryshow');
    Route::get('gallery/{id}','GalleryController@show')->name('galleryshow');
    
    Route::get('photosCreate','PhotosController@create')->name('photosCreate');
    Route::post('photo/store','PhotosController@store')->name('photosstore');
    /** Contact Posts controller */
   // Route::resource('contactPost', 'ContactPostController');

});

