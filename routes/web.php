<?php

Auth::routes();


Route::view('/contatti/grazie', 'contatti.thanks')->name('contatti.thanks');
Route::view('/noleggio/trasporto-disabili-in-carrozzina', 'noleggio.disabile')->name('disabile');
Route::view('/noleggio/grazie', 'noleggio.thanks')->name('noleggio.thanks');
Route::group(['middleware' => ['auth']], function () {
    Route::view('/home/listaClienti','customers.listCustomer')->name('admin.listaClienti');
    Route::view('/home/listaAuto','cars.listCar')->name('admin.listaAuto');
});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/contatti', 'HomeController@contatti')->name('contatti');
Route::post('/contatti/invia','HomeController@contattiSubmit')->name('contattiSubmit');
Route::get('/home', 'HomeController@contatti')->name('contatti');
Route::get('/noleggio', 'HomeController@noleggio')->name('noleggio');
Route::post('/noleggio/inviaMessaggio', 'HomeController@inviaMessaggio')->name('noleggio.invia');
Route::post('/auto/cerca', 'HomeController@search')->name('auto.cerca');
Route::get('/cerca/produttore/{id}', 'HomeController@searchForProducers')->name('auto.cerca.produttore');
Route::get('/auto/galleria', 'HomeController@indexCar')->name('auto.search');
Route::get('/auto/usate/{id}/{slug}','HomeController@goUsatoDettaglio')->name('auto.dettaglio');


Route::post('/home/aggiungiAuto/inviaRichiesta','AdminController@submitAdd')->name('admin.aggiungiAutoRichiesta');
Route::put('/home/modificaRichiesta/{id}','AdminController@submitEdit')->name('admin.modificaAuto');
Route::post('/aggiungiAuto/img/upload','AdminController@uploadPhoto')->name('admin.img.upload');
Route::delete('/aggiungiAuto/img/remove','AdminController@removePhoto')->name('admin.img.remove');
Route::get('/aggiungiAuto/img','AdminController@getImages')->name('admin.img');
Route::get('/home','AdminController@goAreaRiservata')->name('admin.areaRiservata');
Route::get('/home/aggiungiAuto','AdminController@goAggiungiAuto')->name('admin.aggiungiAuto');
Route::get('/exemplaries/{id}','AdminController@getExemplary')->name('car.exemplaries');
Route::get('/preparation/{id}','AdminController@getPreparation')->name('car.preparations');
Route::post('home/auto/{id}/approva','AdminController@approva')->name('car.approved');
Route::delete('home/auto/{id}/cancella','AdminController@cancella')->name('car.delete');

// Area Riservata
Route::post('/photo/{id}/delete', 'CarImageController@delete')->name('photo.delete');
Route::post('/photo/{id}/rating', 'CarImageController@rating')->name('photo.rating');
Route::post('/photo/{id}/images', 'CarImageController@addImage')->name('photo.add');

Route::resource('customers', 'CustomerController');



