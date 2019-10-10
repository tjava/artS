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

Route::get('/', [
    'uses' => 'UsersController@index',
    'as' => 'index'
]);

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ])->middleware('admin');

    Route::get('/product/create', [
        'uses' => 'ProductsController@create',
        'as' => 'product.create'
    ])->middleware('admin');
    
    Route::post('/product/store', [
        'uses' => 'ProductsController@store',
        'as' => 'product.store'
    ])->middleware('admin');

    Route::get('/product/edit/{id}', [
        'uses' => 'ProductsController@edit',
        'as' => 'product.edit'
    ])->middleware('admin');

    Route::post('/product/update/{id}', [
        'uses' => 'ProductsController@update',
        'as' => 'product.update'
    ])->middleware('admin');

    Route::get('/product/delete/{id}', [
        'uses' => 'ProductsController@destroy',
        'as' => 'product.delete'
    ])->middleware('admin');

});

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function(){

    Route::get('/home', [
        'uses' => 'UsersController@home',
        'as' => 'user.home'
    ]);

    Route::get('/countusers', [
        'uses' => 'UsersController@countusers',
        'as' => 'user.countusers'
    ]);
    

});

Route::get('/product', [
    'uses' => 'ProductsController@index',
    'as' => 'product'
]);

Route::get('/product/single/{id}', [
    'uses' => 'ProductsController@show',
    'as' => 'product.single'
]);

Route::get('/about', [
    'uses' => 'AboutController@index',
    'as' => 'about'
]);

Route::get('/faq', [
    'uses' => 'FaqController@index',
    'as' => 'faq'
]);

Route::get('/contact', [
    'uses' => 'ContactController@index',
    'as' => 'contact'
]);

Route::get('/search', [
    'uses' => 'ProductsController@search',
    'as' => 'search'
]);

Route::get('/cart', [
    'uses' => 'ShoppingController@cart',
    'as' => 'cart'
]);

Route::post('/cart/add', [
    'uses' => 'ShoppingController@add_to_cart',
    'as' => 'cart.add'
]);

Route::get('/cart/delete/{id}', [
    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'
]);

Route::get('/cart/incr/{id}/{qty}', [
    'uses' => 'ShoppingController@incr',
    'as' => 'cart.incr'
]);

Route::get('/cart/decr/{id}/{qty}', [
    'uses' => 'ShoppingController@decr',
    'as' => 'cart.decr'
]);

Route::get('/cart/rapid/add/{id}', [
    'uses' => 'ShoppingController@rapid_add',
    'as' => 'cart.rapid.add'
]);

Route::get('/cart/checkout', [
    'uses' => 'CheckoutController@index',
    'as' => 'cart.checkout'
]);
