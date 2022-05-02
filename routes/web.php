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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/page', function () {
    return view('page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'NewspostController@index')->name('newspost');

Route::get('/news/{id}', 'NewspostController@show')->name('newspost.show');

Route::name('product.')
    ->group(function () {
        Route::get('/product', 'ProductController@index')->name('product');
        Route::get('/product/{id}', 'ProductController@show')->name('product.show');
});

Route::name('line_item.')
->group(function(){
    Route::post('/line_item/create','LineItemController@create')->name('create');
    Route::post('/line_item/delete','LineItemController@delete')->name('delete');
});

Route::get('/category/{categoryslug}', 'ProductController@cate')->name('category');

Route::get('/parts-search', 'SearchController@index')->name('search');

Route::get('/search', 'SearchController@index')->name('search');



// Route::get('/','PickupController@index')->name('pickup');

// Route::get('/', 'CateController@index')->name('cate');

Route::get('/', 'TopController@index')->name('top');

Route::get('/', 'TopController@index')->name('top');

Route::name('cart.')
    ->group(function(){
    Route::get('/cart','CartController@index')->name('index');
});



// Route::get('/', 'TopController@news')->name('news');
