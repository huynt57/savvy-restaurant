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

Route::post('getDish', 'DishController@getDishes');

Route::post('sendcontact', 'ContactController@sendContact');

Route::post('listDishByCategory', 'DishController@listDishByCategory');

Route::post('listDishByProperty', 'DishController@listDishByProperty');

Route::post('bookTable', 'ReservationController@bookTable');

Route::post('addCart', 'CartController@addCart');

Route::get('getCartAjax', 'CartController@getCartAjax');

Route::post('updateCartAjax', 'CartController@updateCartAjax');

Route::post('addCartWithNumber', 'CartController@addCartWithNumber');

Route::post('removeItemCart', 'CartController@removeItemFromCart');

Route::get('search', 'SearchController@index');

Route::get('dish/{name}-{dish_id}', 'DishController@DishDetail')->where('name', '[A-Za-z-]+');

Route::get('admin/dish', 'AdminController@dishAdmin');

Route::get('admin/login', 'AdminController@login');

Route::post('admin/plogin', 'AdminController@processAdminLogin');

Route::get('admin/order', 'AdminController@orderAdmin');

Route::get('admin/dish/listdish', 'DishController@listDishAdmin');

Route::post('admin/dish/edit', 'DishController@updateDish');

Route::post('admin/dish/detail','DishController@detailDish');

Route::post('admin/dish/add','DishController@createNewDish');

Route::get('admin/dish/delete','DishController@deleteDish');

Route::post('admin/order/detail','OrderController@orderDetail');

Route::get('admin/order/delete','OrderController@deleteOrder');

Route::get('admin/logout','AdminController@logout');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
