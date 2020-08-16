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

        $linkData = [
            'message' => $car->name,
            'url' => "gmautoveicoli.it".$car->images()->first()->getUrl(800,570)
        ];


        $pageAccessToken ='EAAOUXwL8MswBAAZBRLbZC9AThTS28DoICuZB5fDFm1E26vZC4imI9EQebOPhGtW8RJ7vSXW28s3ijjGNHZADH5xWaI6PgCZCcjUj78omlw9ybYMofGmj3ktq7BEhfPOyZBaZC6o18NFP2Myf1nOBKXZAVhWMOQ5SEqQlg6u1rO6VwvbX0BIkkYeMGT6EZBbWbnl5BUvQZAldhdOWNf7lq4I55zc';

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
