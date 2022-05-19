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

Route::get('/', 'ChampionController@index')->name('champions');
Route::get('/past-champions', 'ChampionController@index')->name('past-champions');
Route::get('/present-champions', 'ChampionController@index')->name('present-champions');
Route::get('/future-champions', 'ChampionController@index')->name('future-champions');


