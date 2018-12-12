<?php


Route::get('/', 'HomeController@index')->name('home');

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

    /**
     * Page routes
     */
    Route::get('/pages', 'PagesController@index')->name('admin.pages');
    Route::get('/pages/{name}', 'PagesController@edit')->name('admin.page.detail');

    Route::put('/pages/{name}', 'PagesController@store')->name('admin.page.update');

    Route::get('/help-center/{name}', 'PagesController@edit')->name('admin.helpcenter.detail');
    Route::get('/terms-and-condition/{name}', 'PagesController@edit')->name('admin.terms.detail');


    /**
     * Article category routes
     */
    Route::get('/category', 'CategoryController@index')->name('admin.category.index');


    Route::get('/category/create', 'CategoryController@create')->name('admin.category.add');
    Route::post('/category/create', 'CategoryController@store')->name('admin.category.add');

    Route::get('/category/get-slug/', 'CategoryController@getSlug')->name('admin.category.slug');

    Route::get('/category/{category}', 'CategoryController@edit')->name('admin.category.edit');
    Route::post('/category/{category}', 'CategoryController@update')->name('admin.category.update');
    Route::delete('/category/{category}', 'CategoryController@destroy')->name('admin.category.destroy');


    /**
     * Article route
     */
    Route::get('/articles', 'ArticleController@index')->name('admin.articles.index');

    Route::get('/articles/create', 'ArticleController@create')->name('admin.articles.create');
    Route::post('/articles/create', 'ArticleController@store')->name('admin.articles.create');

    Route::get('/articles/{article}', 'ArticleController@edit')->name('admin.articles.edit');
    Route::put('/articles/{article}', 'ArticleController@update')->name('admin.articles.edit');

    Route::delete('/articles/{article}', 'ArticleController@destroy')->name('admin.article.destroy');

    /**
     * Setting routes
     */
    Route::get('/settings/site-setting', 'SiteSettingController@index')->name('admin.setting.site');
    Route::post('/settings/site-setting', 'SiteSettingController@store')->name('admin.setting.site');

    Route::get('/settings/feature-property', 'HomeSettingController@featureProperty')->name('admin.setting.feature-property');
    Route::post('/settings/feature-property', 'HomeSettingController@storeFeatureProperty')->name('admin.setting.feature-property');

    Route::get('/settings/feature-town', 'HomeSettingController@featureTown')->name('admin.setting.feature-town');
    Route::post('/settings/feature-town', 'HomeSettingController@storeFeatureTown')->name('admin.setting.feature-town');

    Route::get('/setting/testimonial', 'TestimonialController@index')->name('admin.testimonial');
    Route::get('/setting/testimonial/create', 'TestimonialController@create')->name('admin.testimonial.create');
//    Route::get('/setting/testimonial', 'TestimonialController@edit')->name('admin.testimonial.edit');
});


Route::group(['middleware' => ['realtors'], 'prefix' => 'realtors'], function () {
    Route::get('/', 'RealtorController@index')->name('realtors');
    Route::get('/add-property', 'PropertyController@index');
    Route::get('/get-city', 'PropertyController@getCity');


});

Auth::routes();

