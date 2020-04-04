<?php

namespace App\Http\Controllers;

use App\Exemplary;
use App\Preparation;
use App\Producer;

class TestController extends Controller
{
    public function index()
    {
        $producers=Producer::all();
        return view('test.zizard',compact('producers'));
    }


}
