<?php

namespace App\Http\Controllers;

use App\Car;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ContattiRequest;
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
        return view('noleggio.homeNoleggio');
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

        // previdi che le date siano maggiori o uguali del now 

        $dataRitiro = Carbon::createFromDate($request->input('dataRitiro'));
        if ($dataRitiro<Carbon::now()) {
            $request->session()->flash('flag','Attenzione: Devi selezionare delle date valide');
            return redirect()->route('noleggio');
        }

        $dataConsegna = Carbon::createFromDate($request->input('dataConsegna'));

        if ($dataRitiro<Carbon::now()) {
            $request->session()->flash('flag','Attenzione: Devi selezionare delle date valide');
            return redirect()->route('noleggio');
        }

        if($dataRitiro <=$dataConsegna){
            dd($request->input());
        } else {
            $request->session()->flash('flag','Errore nel selezionare le date!');
            return redirect()->route('noleggio');
        }
    }

    public function contattiSubmit(ContattiRequest $request){
        dump("form Contatti");

        dd(is_null($request->input('consent')));
    }

}
