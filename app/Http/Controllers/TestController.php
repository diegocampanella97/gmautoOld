<?php

namespace App\Http\Controllers;

use App\Car;
use App\Color;
use App\Exemplary;
use App\Preparation;
use App\Producer;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        //Post property to Facebook

        try {
            $fb = new Facebook([
                'app_id' => '1007560723018444',
                'app_secret' => 'd300ec6125306b39afff5603fe5da99d',
            ]);
        } catch (FacebookSDKException $e) {
            echo $e;
        }

        $linkData = [
            'message' => 'Prove Messaggio',
            'url' => 'https://images.unsplash.com/photo-1462899006636-339e08d1844e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'
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
