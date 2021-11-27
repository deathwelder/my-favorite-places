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

Route::get('places/create', 'App\Http\Controllers\mainController@create')->name('create');

Route::get('/places', 'App\Http\Controllers\mainController@places')->name('places');
Route::post('/places/submit', 'App\Http\Controllers\mainController@submit')->name('submit');
Route::get('places/{id}/', 'App\Http\Controllers\mainController@info')->name('info');
Route::get('places/{id}/photos/add', 'App\Http\Controllers\mainController@addPhoto')->name('addPhoto');
