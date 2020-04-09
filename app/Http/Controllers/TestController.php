<?php

namespace App\Http\Controllers;

use App\Car;
use App\Exemplary;
use App\Preparation;
use App\Producer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
            $carsFind=Car::
                join('preparations','cars.preparations_id','=','preparations.id')->
                join('exemplaries','exemplaries_id','=','exemplaries.id')->
                join('producers','producers_id','=','producers.id')->
                where('producers.id','=',32)->
                pluck('cars.id');

            $cars=
                Car::
                with(['preparations.exemplar.producer',])->
                whereIn('id',$carsFind)->
                paginate(15)
            ;


            return view('usatoAuto.gallery',compact('cars'));
    }

}
