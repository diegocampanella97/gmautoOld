<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/servizi', 'HomeController@servizi')->name('servizi');
Route::get('/contatti', 'HomeController@contatti')->name('contatti');
Route::post('/contatti/invia','HomeController@contattiSubmit')->name('contattiSubmit');
Route::view('/contatti/grazie', 'contatti.thanks')->name('contatti.thanks');

Route::get('/home', 'HomeController@contatti')->name('contatti');

Route::post('/home/aggiungiAuto/inviaRichiesta','AdminController@submitAdd')->name('admin.aggiungiAutoRichiesta');
Route::put('/home/modificaRichiesta/{id}','AdminController@submitEdit')->name('admin.modificaAuto');

Route::get('/auto/usate/{id}','FrontendController@goUsatoDettaglio')->name('auto.dettaglio');


Route::post('/aggiungiAuto/img/upload','AdminController@uploadPhoto')->name('admin.img.upload');
Route::delete('/aggiungiAuto/img/remove','AdminController@removePhoto')->name('admin.img.remove');
Route::get('/aggiungiAuto/img','AdminController@getImages')->name('admin.img');

Route::view('/noleggio/trasporto-disabili-in-carrozzina', 'noleggio.disabile')->name('disabile');
Route::view('/noleggio/grazie', 'noleggio.thanks')->name('noleggio.thanks');

Route::get('/noleggio', 'HomeController@noleggio')->name('noleggio');
Route::post('/noleggio/inviaMessaggio', 'HomeController@inviaMessaggio')->name('noleggio.invia');

Route::get('/auto/galleria','CarController@showAll')->name('galleryAuto');
Route::post('/auto/cerca', 'HomeController@search')->name('auto.cerca');
Route::get('/cerca/producers/{id}', 'HomeController@searchForProducers')->name('auto.cerca.produttore');

// Area Riservata
Route::get('/home','AdminController@goAreaRiservata')->name('admin.areaRiservata');
Route::get('/home/aggiungiAuto','AdminController@goAggiungiAuto')->name('admin.aggiungiAuto');

Route::post('home/auto/{id}/approva','CarController@approva')->name('car.approved');
Route::delete('home/auto/{id}/cancella','CarController@cancella')->name('car.delete');

Route::get('/home/listaMacchine','AdminController@golista')->name('admin.listaAuto');

Route::get('/car', 'ExemplarController@showlist')->name('car');


Route::get('/exemplaries/{id}','AdminController@getExemplary')->name('car.exemplaries');
Route::get('/preparation/{id}','AdminController@getPreparation')->name('car.preparations');

Route::get('/test', 'TestController@index')->name('test');

Route::post('/photo/{id}/delete', 'CarImageController@delete')->name('photo.delete');
Route::post('/photo/{id}/rating', 'CarImageController@rating')->name('photo.rating');
Route::post('/photo/{id}/images', 'CarImageController@addImage')->name('photo.add');