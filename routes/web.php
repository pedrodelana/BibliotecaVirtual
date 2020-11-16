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

Route::get('/', 'HomeController@index');
Route::get('/admin', 'HomeController@admin');
Route::post('/books', 'BookController@store');
Route::post('/books/delete/{id}', 'BookController@destroy');
Route::get('/books/edit/{id}', 'BookController@edit');
Route::post('/books/update/{id}', 'BookController@update');

