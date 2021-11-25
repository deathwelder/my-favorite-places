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

Route::get('/places', 'App\Http\Controllers\mainController@places')->name('places');
Route::get('/places/create', 'App\Http\Controllers\mainController@create')->name('create');
