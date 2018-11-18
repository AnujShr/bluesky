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


    /**
     * Articles category routes
     */
    Route::get('/category', 'CategoryController@index')->name('admin.category.index');


    Route::get('/category/create', 'CategoryController@create')->name('admin.category.add');
    Route::post('/category/create', 'CategoryController@create')->name('admin.category.add');

    Route::get('/category/get-slug/', 'CategoryController@getSlug')->name('admin.category.slug');

    Route::get('/category/{category}', 'CategoryController@edit')->name('admin.category.edit');
    Route::post('/category/{category}', 'CategoryController@update')->name('admin.category.update');
    Route::delete('/category/{category}', 'CategoryController@destroy')->name('admin.category.destroy');


    /**
     * Articles route
     */
    Route::get('/articles', 'ArticlesController@index')->name('admin.articles.index');

    Route::get('/articles/add-article', 'ArticlesController@addArticle')->name('admin.articles.add');
    Route::post('/articles/add-article', 'ArticlesController@create')->name('admin.articles.add');

    Route::get('/articles/{article}', 'ArticlesController@edit')->name('admin.articles.edit');
    Route::post('/articles/{article}', 'ArticlesController@update')->name('admin.articles.edit');
    Route::delete('/articles/{article}', 'ArticlesController@destroy')->name('admin.articles.destroy');

    Route::post('/articles/save-article', 'ArticlesController@update')->name('admin.articles.update');

});

Auth::routes();

