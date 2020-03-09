<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        SEOMeta::setTitle('Home');
        return view('home');
    }

    public function noleggio(){
        return view('noleggio.home');
    }

    public function servizi(){
        return view('servizi.home');
    }

    public function contatti(){
        return view('contatti.home');
    }


}
