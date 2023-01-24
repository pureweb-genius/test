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

Route::get('/book/','App\Http\Controllers\BookController@index')->name('book.index');
Route::get('/book/create','App\Http\Controllers\BookController@create');
Route::post('/book/','App\Http\Controllers\BookController@store')->name('book.store');
Route::post('/author/','App\Http\Controllers\AuthorController@store')->name('author.store');
Route::get('/author/create','App\Http\Controllers\AuthorController@create');
