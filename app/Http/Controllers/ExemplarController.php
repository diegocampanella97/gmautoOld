<?php

namespace App\Http\Controllers;

use App\Exemplar;
use Illuminate\Http\Request;

class ExemplarController extends Controller
{
    public function showlist(){
        $examples = Exemplar::all();
        return view('exemplar.list', compact('examples'));

    }
}
