<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class FrontendController extends Controller {
    
    public function goNoleggio(){
        return view('noleggio.home');
    }

    public function goContatti(){
        return view('contatti.home');
    }
    
    public function goUsato(){
        return view('usatoAuto.home');
    }

    public function goUsatoDettaglio($id){
        $car = Car::find($id);
        return view('usatoAuto.detail',compact('car'));
    }





}
