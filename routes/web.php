<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/properties', function () {
    return view('front.properties');
})->name('properties');

Route::get('/news', function () {
    return view('front.news');
})->name('news');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact');
Route::view('/property', 'front.property')->name('property');
Route::post('/newsletter-subscribe', 'HomeController@newsLetterSubscribe')->name('newsletter');

Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::view('/', 'admin.dashboard')->name('admin.home');
    Route::view('/users', 'admin.dashboard')->name('admin.users');

    Route::get('/pages', 'PagesController@index')->name('admin.pages');
    Route::get('/pages/{name}', 'PagesController@edit')->name('admin.page.detail');

    Route::put('/pages/{name}', 'PagesController@store')->name('admin.page.update');

    Route::get('/help-center/{name}', 'PagesController@edit')->name('admin.helpcenter.detail');
    Route::get('/terms-and-condition/{name}', 'PagesController@edit')->name('admin.terms.detail');

    Route::get('/category', 'CategoryController@index')->name('admin.category.index');
});

Auth::routes();

