<?php

use App\Http\Controllers\ComicController;
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

Route::resource('comics', ComicController::class);
Route::get('/comics/create', 'ComicController@create')->name('comics.create');
Route::post('/comics', 'ComicController@store')->name('comics.store');
Route::get('/comics/{id}/edit', 'ComicController@edit')->name('comics.edit');
Route::put('/comics/{id}', 'ComicController@update')->name('comics.update');
