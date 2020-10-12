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
Route::get('admin/nation', 'NationController@index')->name('admin.nation.index');
Route::get('admin/nation/create', 'NationController@create')->name('admin.nation.create');
Route::post('admin/nation/store', 'NationController@store')->name('admin.nation.store');

//CLUBS
Route::get('admin/clubs', 'ClubController@index')->name('admin.club.index');
Route::get('admin/clubs/create', 'ClubController@create')->name('admin.club.create');
Route::post('admin/clubs/store', 'ClubController@store')->name('admin.club.store');

//CLUBS
Route::get('admin/playerposition', 'PlayerPositionController@index')->name('admin.playerposition.index');
Route::get('admin/playerposition/create', 'PlayerPositionController@create')->name('admin.playerposition.create');
Route::post('admin/playerposition/store', 'PlayerPositionController@store')->name('admin.playerposition.store');