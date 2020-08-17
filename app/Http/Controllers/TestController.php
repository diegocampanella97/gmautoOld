<?php

namespace App\Http\Controllers;

use App\Car;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
class TestController extends Controller
{
    public function index($id){

        $car = Car::find($id);

        //dd($car->images()->get()->first()->filePath);

        //dd($car->images()->first()->getUrl(800,570));
        try {
            $fb = new Facebook([
                'app_id' => '1007560723018444',
                'app_secret' => 'd300ec6125306b39afff5603fe5da99d',
            ]);
        } catch (FacebookSDKException $e) {
            echo $e;
        }

        $header = "Nuovi Arrivi!!! \n\n\nhttps://www.gmautoveicoli.it";

        $footer = "La vettura è a disposizione per la visione e qualsiasi controllo in ogni momento tramite appuntamento preventivo presso la nostra sede.\n\n\nNON ESITATE A CONTATTARCI PER QUALSIASI INFORMAZIONE, SIAMO A VOSTRA COMPLETA DISPOSIZIONE!
        \nACCETTIAMO LE VOSTRE VETTURE IN PERMUTA ALLE MIGLIORI QUOTAZIONI DI MERCATO \nPotete contattarci su whatsapp mandandoci foto e informazioni della vostra vettura per avere una quotazione indicativa.\n\n\nTelefono/Whatsapp: Gianluca : 3389807371";

//        incorporamento header body footer
        $message = $header."\n\n".$car->name."\n\nScopri l’offerta sul sito: "."\n".route('auto.dettaglio',['id' => $car->id, 'slug' => $car->slug ])."\n\n".$footer;

        $linkData = [
            'message' => $message,
            'url' => "gmautoveicoli.it".$car->images()->first()->getUrl(800,570)
        ];



        $pageAccessToken ='EAAOUXwL8MswBALcELMHgYhfztvqabrETpJMP2jfh1qJKU0y0y65F540MWD07fiuZCLaQewFcvfjluvGnT5Om3ZA5R4GiJnvFVeZADBwpeiAQZAmt6kw1LO2oQhrZCgh0THNNDTc1RQ1sHQg74mZAAIucb5X9gKuh5ZB73oZCcFGDRKzTHD79E53A6dhcvjZA2ZBM5KnqQ5ZBHaHZBZBMZBAUbDgZCKC';

        try {
            $response = $fb->post('2000966496847873/photos', $linkData, $pageAccessToken);
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: '.$e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: '.$e->getMessage();
            exit;
        }
        $graphNode = $response->getGraphNode();

    }

}
