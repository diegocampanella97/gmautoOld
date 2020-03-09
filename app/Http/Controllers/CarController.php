<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showAll(){
        return view('usatoAuto.gallery');
    }

}
