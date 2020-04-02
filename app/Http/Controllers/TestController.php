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
        return view('test.select',compact('producers'));
    }

    public function getExemplary($id)
    {
        $states = Exemplary::where("producers_id",$id)->pluck("name","id");
        return json_encode($states);
    }
    public function getPreparation($id)
    {
        $states = Preparation::where("exemplaries_id",$id)->pluck("name","id");
        return json_encode($states);
    }
}
