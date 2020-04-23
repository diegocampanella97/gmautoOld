<?php

namespace App\Http\Controllers;

use App\Car;
use App\Color;
use App\Exemplary;
use App\Preparation;
use App\Producer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
//        $cars = Car::getCarApproved();
//        $color = Color::all();


        return view('test.test');
    }

}
