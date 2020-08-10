<?php

namespace App\Http\Controllers;

use App\Car;
use App\Notifications\CarNotificationFacebook;
use Illuminate\Http\Request;

class SocialController extends Controller
{
public function facebookSendPhoto($id){
        $car = Car::find($id)->notify(new CarNotificationFacebook($id));
    }
}
