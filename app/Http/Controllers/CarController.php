<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showAll(){
        return view('usatoAuto.gallery');
    }

    public function getList(){
        return datatables(
            Car::
                with([
                    'collection' => function($q) {$q->select('id', 'name');},
                    'exemplar' => function($q) {$q->select('id', 'name');},
                ])
                ->where('approved',true)
            
        )->toJson();
    }

    public function dettaglio($id){
        dd($id);
    }

    public function cancella($id){
        dd($id);
    }

    public function approva($id){
        dd($id);
    }

}
