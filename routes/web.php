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
Route::get('/category', 'CategoryController@create')->name('create-category');
Route::post('/category/save', 'CategoryController@save')->name('save-category');
Route::get('category/list', 'CategoryController@list')->name('category-list');
Route::get('category/edit/{id}', 'CategoryController@update')->name('update-category');
Route::post('category/save-update/{id}', 'CategoryController@saveUpdate')->name('save-update');
Route::get('category/list/{id}', 'CategoryController@delete')->name('delete-category');
