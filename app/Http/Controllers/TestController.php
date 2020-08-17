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

        $message = "Scopri l’offerta sul sito: link in bio."."</br>"."Prova accapo";

        $linkData = [
            'message' => $message,
            'url' => "gmautoveicoli.it".$car->images()->first()->getUrl(800,570)
        ];


        $pageAccessToken ='EAAOUXwL8MswBAJXR2ZCEhu7ZBEUIH5oCnQPV2DwPCJ28p8eXVdOT6aGZCT8HMwOvIbAJCPBquvZBZBCtP1rppfjXMWNSxMv3KNLzzt8LqLNHYhQzPauzx70oNEALSsJCGysP5g4tCKAgr4XcZCloYkYVJ69OUOS9xfSpU1azqoZCZAeqJE50pk159lAQpfAdq0VC4CIunkygBoWqvtPdaTmI';

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
