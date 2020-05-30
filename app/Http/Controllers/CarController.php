<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\OpenGraph;

class CarController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function showAll(){
        $cars = Car::getCarApproved();
        return view('usatoAuto.gallery',compact('cars'));
    }

    public function getList(){
        return datatables(
            Car::
                with([
                    'preparations.exemplar.producer',
                ])
                ->select('id','name','targa','preparations_id','updated_at')
                ->where('approved',true)
        )->toJson();
    }

    public function getListToApproved(){
        return datatables(
            Car::
            with([
                'preparations.exemplar.producer',
            ])
                ->select('id','name','targa','preparations_id','updated_at')
                ->where('approved',false)
        )->toJson();
    }




}
