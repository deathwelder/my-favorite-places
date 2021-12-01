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



Route::prefix('places')->group(function() {
        Route::get('create', 'App\Http\Controllers\mainController@create')->name('create');
        Route::post('submit', 'App\Http\Controllers\mainController@submit')->name('submit');
        Route::get('/', 'App\Http\Controllers\mainController@places')->name('places');
        Route::get('{id}', 'App\Http\Controllers\mainController@info')->name('info');
        Route::get('{id}/photos/add', 'App\Http\Controllers\mainController@addPhoto')->name('addPhoto');
        Route::post('photos/add/photo', 'App\Http\Controllers\mainController@photo')->name('photo');
});

Route::get('/photos/add', 'App\Http\Controllers\mainController@addPhoto2')->name('photo2');
Route::get('/menu', 'App\Http\Controllers\mainController@showMenu')->name('menu');
