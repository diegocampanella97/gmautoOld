<?php

namespace App\Http\Controllers;

use App\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\NoleggioRequest;
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

    public function search(Request $request){

        $cars = Car::search($request->input('query'))->where('approved',1)->paginate(20); 
        return view('usatoAuto.search',compact('cars'));
    }

    public function inviaMessaggio(NoleggioRequest $request){
        $date = "2016-09-16 11:00:00";
        $datework = Carbon::createFromDate($date);
        $now = Carbon::now();
        $testdate = $datework->diffInDays($now);
        
        dd($testdate);
        
    }

}
