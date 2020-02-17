<?php

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/noleggio', 'HomeController@noleggio')->name('noleggio');
Route::get('/servizi', 'HomeController@servizi')->name('servizi');
Route::get('/contatti', 'HomeController@contatti')->name('contatti');
