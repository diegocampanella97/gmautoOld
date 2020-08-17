<?php

namespace App\Http\Controllers;

use App\Car;
use App\Notifications\CarNotificationFacebook;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;

class SocialController extends Controller
{

    public function sendToFacebook($id){
        $car = Car::with('images')->findOrFail($id);

        try {
            $fb = new Facebook([
                'app_id' => getenv('FACEBOOK_APP_ID'),
                'app_secret' => getenv('FACEBOOK_APP_SECRET'),
            ]);
        } catch (FacebookSDKException $e) {
            echo $e;
        }

        $header = "Nuovi Arrivi!!! \n\n\n";

        $body = $car->name."\n\nScopri l’offerta sul sito: "."\n".route('auto.dettaglio',['id' => $car->id, 'slug' => $car->slug ]);

        $footer = "La vettura è a disposizione per la visione e qualsiasi controllo in ogni momento tramite appuntamento preventivo presso la nostra sede.\n\n\nNON ESITATE A CONTATTARCI PER QUALSIASI INFORMAZIONE, SIAMO A VOSTRA COMPLETA DISPOSIZIONE!
        \nACCETTIAMO LE VOSTRE VETTURE IN PERMUTA ALLE MIGLIORI QUOTAZIONI DI MERCATO \nPotete contattarci su whatsapp mandandoci foto e informazioni della vostra vettura per avere una quotazione indicativa.\n\n\nTelefono/Whatsapp: Gianluca : 3389807371";

//        incorporamento header body footer
        $messagePost = $header."\n\n".$body."\n\n".$footer;

        $linkData = [
            'message' => $messagePost,
            'url' => "gmautoveicoli.it".$car->images()->first()->getUrl(800,570)
        ];

        try {
            $response = $fb->post(getenv('FACEBOOK_PAGE_ID').'/photos', $linkData, getenv('FACEBOOK_ACCESS_TOKEN'));
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
