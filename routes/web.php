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