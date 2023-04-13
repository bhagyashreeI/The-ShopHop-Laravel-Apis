<?php
use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *');
//Access-Control-Allow-Origin: *
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::group(['prefix' => 'auth'], function () {

    Route::post('login', 'AuthController@login')->name('login');
    Route::post('signup', 'AuthController@signup');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'AuthController@logout');
    });

});
Route::apiResource('categories', 'CategoryController')->except(['update', 'store', 'destroy']);
Route::get('products', 'ProductController@index');
Route::get('productsbycategory/{cat_id}', 'ProductController@productsByCategoryId');
Route::apiResource('carts', 'CartController')->except(['update', 'index']);
Route::apiResource('orders', 'OrderController')->except(['update', 'destroy','store'])->middleware('auth:api');
Route::post('/carts/{cart}', 'CartController@addProducts');
Route::post('/carts/{cart}/checkout', 'CartController@checkout');
