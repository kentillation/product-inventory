<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('index');
});

// PRODUCT
Route::get('/products', 'ProductController@search')->name('search-product');
Route::get('/products/edit/{id}', 'ProductController@get')->name('get-product');
Route::post('/products/save', 'ProductController@save')->name('save-product');
Route::put('/products/edit/{id}', 'ProductController@update')->name('update-product');
Route::delete('/products/delete/{id}', 'ProductController@save')->name('delete-product');

    return view('products/index');
});

Route::get('/category', 'CategoryController@create')->name('create-category');
Route::post('/category/save', 'CategoryController@save')->name('save-category');
Route::get('category/list', 'CategoryController@list')->name('category-list');
Route::get('category/edit/{id}', 'CategoryController@update')->name('update-category');
Route::post('category/save-update/{id}', 'CategoryController@saveUpdate')->name('save-update');
Route::get('category/list/{id}', 'CategoryController@delete')->name('delete-category');

//Unit
Route::get('/unit', 'UnitController@create')->name('create-unit'); //create
Route::post('/unit/save', 'UnitController@save')->name('save-unit'); //save function
Route::get('/unit/list', 'UnitController@list')->name('unit-list'); //list
Route::get('/unit/update/{id}', 'UnitController@update')->name('update-unit'); //edit
Route::post('/unit/save-update/{id}', 'UnitController@saveUpdate')->name('update-save-unit'); //save update
Route::get('/unit/list/{id}', 'UnitController@delete')->name('delete-unit'); //delete


