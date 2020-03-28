<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


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
                ->select('id','name','targa','collection_id','exemplar_id','updated_at')
                ->where('approved',true)

        )->toJson();
    }

    public function getListToApproved(){
        return datatables(
            Car::
                with([
                    'collection' => function($q) {$q->select('id', 'name');},
                    'exemplar' => function($q) {$q->select('id', 'name');},
                ])
                ->select('id','name','targa','collection_id','exemplar_id','updated_at')
                ->where('approved',false)

        )->toJson();
    }




    public function dettaglio($id){
        dd($id);
    }

    public function cancella($id){
        $car = Car::findOrFail($id);

        if(!Auth::user()){
            return redirect()->route('home');
        }

        $car->delete();


        return redirect()->route('admin.listaAuto');

    }

    public function approva($id){
        $car = Car::findOrFail($id);

        if(!Auth::user()){
            return redirect()->route('home');
        }

        if($car->approved == 1){
            $car->approved = 0;
        } else {
            $car->approved = 1;
        }

        $car->save();

        return redirect()->route('admin.listaAuto');
    }

}
