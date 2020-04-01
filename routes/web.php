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

Route::get('/car', 'ExemplarController@showlist')->name('car');


Route::get('/test',function () {


    $produttoreCars = json_decode(file_get_contents(database_path('seeds/produttore_cars.json')),true);


    foreach ($produttoreCars as $produttore) {

        echo "<h1>".$produttore['value']."</h1>";

        $produttoreVeicolo = "https://www2.subito.it/templates/api/carmodels.js?v=5&carbrand=".$produttore['id'];

        $dataModelliAuto = json_decode(utf8_encode(file_get_contents($produttoreVeicolo)),true);

        foreach ($dataModelliAuto as $modelloSingolo) {
            echo "<h2>".$modelloSingolo['id'] . ' - '.  $modelloSingolo['value'] .": </h2>". "\n";

            $dataAllestimenti = json_decode(utf8_encode(file_get_contents('https://www2.subito.it/templates/api/carversions.js?v=5&carbrand='.$produttore['id'].'&carmodel='.$modelloSingolo['id'])),true);

            foreach ($dataAllestimenti as $allestimentoVeicolo) {
                echo "<p>".$allestimentoVeicolo['id'] . ' - '.  $allestimentoVeicolo['value'] .": </p>". "\n";
            }

            echo "\n\n";
        }

    }

});
