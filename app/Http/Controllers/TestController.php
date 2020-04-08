<?php

namespace App\Http\Controllers;

use App\Car;
use App\Exemplary;
use App\Preparation;
use App\Producer;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        dd(

            DB::table('cars')
                ->join('preparations','preparations_id','=','preparations.id')
                ->select('cars.name','preparations.name')->get()

        );
    }

}
