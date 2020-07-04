<?php

use Illuminate\Support\Facades\Route;

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
// Route User
Route::get('user/dashboard', 'UserController@dashboard');

// Route User Login
Route::get('/', 'LoginController@index');
Route::post('/', 'LoginController@login_user');

// Route User Logout
Route::get('user/logout', 'UserController@logout');

// Route User Register
Route::get('register', 'UserController@register');
Route::post('register', 'UserController@register_post');

// Route User Product
Route::get('user/product', 'UserController@product');
Route::get('user/product/{product}', 'UserController@detail_product');

// Route User Wishlist
Route::get('user/wishlist', 'UserController@wishlist');

// Route Admin
Route::get('admin/dashboard', 'AdminController@dashboard');

// Route Admin Login
Route::get('admin', 'LoginController@index');
Route::post('admin', 'LoginController@login_admin');

// Route Admin Logout
Route::get('admin/logout', 'AdminController@logout');

// Route Admin Category
Route::get('admin/category', 'AdminController@category');
Route::get('admin/category/create', 'AdminController@create_category');
Route::get('admin/category/{category}', 'AdminController@detail_category');
Route::get('admin/category/{category}/edit', 'AdminController@edit_category');
Route::post('admin/category', 'AdminController@save_category');
Route::patch('admin/category/{category}', 'AdminController@update_category');
Route::delete('admin/category/{category}', 'AdminController@delete_category');

// Route Admin Product
Route::get('admin/product', 'AdminController@product');
Route::get('admin/product/create', 'AdminController@create_product');
Route::get('admin/product/{product}', 'AdminController@detail_product');
Route::get('admin/product/{product}/edit', 'AdminController@edit_product');
Route::post('admin/product', 'AdminController@save_product');
Route::patch('admin/product/{product}', 'AdminController@update_product');
Route::delete('admin/product/{product}', 'AdminController@delete_product');