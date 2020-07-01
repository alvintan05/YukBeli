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

Route::get('/', function () {
    return view('welcome');
});

// Route Admin
Route::get('admin', 'AdminController@index');

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