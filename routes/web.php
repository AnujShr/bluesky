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

Auth::routes();

