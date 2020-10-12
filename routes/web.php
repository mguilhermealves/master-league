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

//NATION
Route::get('/nation', 'NationController@index')->name('nation.index');
Route::get('/nation/create', 'NationController@create')->name('nation.create');
Route::post('/nation/store', 'NationController@store')->name('nation.store');

//CLUBS
Route::get('/clubs', 'ClubController@index')->name('clubs.index');
Route::get('/clubs/create', 'ClubController@create')->name('clubs.create');
Route::post('/clubs/store', 'ClubController@store')->name('clubs.store');
