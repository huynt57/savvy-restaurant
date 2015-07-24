<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'MainController@index');

Route::get('home', 'HomeController@index');

Route::get('main', 'MainController@index');

Route::get('contact', 'MainController@contact');

Route::get('reservation', 'MainController@reservation');

Route::get('menu', 'MainController@store');

Route::get('checkout', 'MainController@checkout');

Route::get('recipe', 'MainController@recipe');

Route::get('about', 'MainController@about');

Route::get('store', 'MainController@store');

Route::get('detail', 'MainController@detail');

Route::post('processCheckOut', 'CartController@checkout');

Route::get('getDish', 'DishController@getDishes');

Route::post('sendContact', 'ContactController@sendContact');

Route::post('listDishByCategory', 'DishController@listDishByCategory');

Route::post('bookTable', 'ReservationController@bookTable');

Route::post('addCart', 'CartController@addCart');

Route::post('addCartWithNumber', 'CartController@addCartWithNumber');

Route::post('removeItemCart', 'CartController@removeItemFromCart');

Route::get('search', 'SearchController@index');

Route::get('dish/{name}-{dish_id}', 'DishController@DishDetail')->where('name', '[A-Za-z-]+');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
