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
// Route::get('/servizi', 'HomeController@servizi')->name('servizi');
Route::get('/contatti', 'HomeController@contatti')->name('contatti');
Route::get('/home', 'HomeController@contatti')->name('contatti');

// Area Riservata
Route::get('/home','AdminController@goAreaRiservata')->name('admin.areaRiservata');

Route::get('/home/aggiungiAuto','AdminController@goAggiungiAuto')->name('admin.aggiungiAuto');

Route::post('/home/aggiungiAuto/inviaRichiesta','AdminController@submitAdd')->name('admin.aggiungiAutoRichiesta');

Route::get('/auto/usate/{id}','FrontendController@goUsatoDettaglio')->name('auto.dettaglio');


Route::post('/aggiungiAuto/img/upload','AdminController@uploadPhoto')->name('admin.img.upload');
Route::delete('/aggiungiAuto/img/remove','AdminController@removePhoto')->name('admin.img.remove');
Route::get('/aggiungiAuto/img','AdminController@getImages')->name('admin.img');