<?php

namespace App\Http\Controllers;

use App\Car;
use App\Notifications\CarNotificationFacebook;
use Illuminate\Http\Request;

class SocialController extends Controller
{
public function facebookSendPhoto(){
        $car = Car::find(1)->notify(new CarNotificationFacebook(1));
    }
}
