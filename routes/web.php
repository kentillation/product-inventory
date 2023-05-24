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
    return view('products/index');
});

//Unit
Route::get('/unit', 'UnitController@create')->name('create-unit'); //create
Route::post('/unit/save', 'UnitController@save')->name('save-unit'); //save function
Route::get('/unit/list', 'UnitController@list')->name('unit-list'); //list
Route::get('/unit/update/{id}', 'UnitController@update')->name('update-unit'); //edit
Route::post('/unit/save-update/{id}', 'UnitController@saveUpdate')->name('update-save-unit'); //save update
Route::get('/unit/list/{id}', 'UnitController@delete')->name('delete-unit'); //delete