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

// Route::get('/servizi', 'HomeController@servizi')->name('servizi');
Route::get('/contatti', 'HomeController@contatti')->name('contatti');
Route::post('/contatti/invia','HomeController@contattiSubmit')->name('contattiSubmit');
Route::view('/contatti/grazie', 'contatti.thanks')->name('contatti.thanks');

Route::get('/home', 'HomeController@contatti')->name('contatti');



Route::post('/home/aggiungiAuto/inviaRichiesta','AdminController@submitAdd')->name('admin.aggiungiAutoRichiesta');

Route::get('/auto/usate/{id}','FrontendController@goUsatoDettaglio')->name('auto.dettaglio');


Route::post('/aggiungiAuto/img/upload','AdminController@uploadPhoto')->name('admin.img.upload');
Route::delete('/aggiungiAuto/img/remove','AdminController@removePhoto')->name('admin.img.remove');
Route::get('/aggiungiAuto/img','AdminController@getImages')->name('admin.img');



Route::view('/noleggio/trasporto-disabili-in-carrozzina', 'noleggio.disabile')->name('disabile');
Route::view('/noleggio/grazie', 'noleggio.thanks')->name('noleggio.thanks');

Route::get('/noleggio', 'HomeController@noleggio')->name('noleggio');
Route::post('/noleggio/inviaMessaggio', 'HomeController@inviaMessaggio')->name('noleggio.invia');

Route::get('/auto/galleria','CarController@showAll')->name('galleryAuto');
Route::POST('/auto/cerca', 'HomeController@search')->name('auto.cerca');


// Area Riservata
Route::get('/home','AdminController@goAreaRiservata')->name('admin.areaRiservata');
Route::get('/home/aggiungiAuto','AdminController@goAggiungiAuto')->name('admin.aggiungiAuto');
Route::get('home/auto/{id}','CarController@dettaglio')->name('car.detail');

Route::post('home/auto/{id}/approva','CarController@approva')->name('car.detail');
Route::delete('home/auto/{id}/cancella','CarController@cancella')->name('car.detail');

Route::get('/home/listaMacchine','AdminController@golista')->name('admin.listaAuto');
