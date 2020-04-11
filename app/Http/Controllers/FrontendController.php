<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Support\Facades\Auth;

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

        $car = Car::with([
            'preparations.exemplar.producer','images','fuel',
            'transmission','kilometers','color','door'
        ])->findOrFail($id);

        if($car->approved == 0) {
            if(Auth::user()){
                return view('usatoAuto.detail',compact('car'));
            }

            return redirect()->route('home');
        }

        return view('usatoAuto.detail',compact('car'));
    }



}
