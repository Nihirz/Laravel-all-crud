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
Route::get('/','IndexController@view')->name('index');
Route::post('/store','IndexController@store')->name('store');
Route::get('/edit/{id}','IndexController@edit')->name('edit');
Route::post('/update','IndexController@update')->name('update');
Route::get('/delete/{id}','IndexController@delete')->name('delete');
