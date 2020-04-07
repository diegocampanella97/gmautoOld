<?php

namespace App\Http\Controllers;

use App\Car;
use DateTime;
use Carbon\Carbon;
use App\Mail\ContattiMailed;
use App\Mail\NoleggioMailed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

//        dd($request->input());

        $cars = Car::search($request->input('query'))
            ->where('approved',1)
            ->paginate(20);

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


        // "name" => "aaa"
        // "email" => "diegocampanella97@gmail.com"
        // "dataRitiro" => "2020-03-24"
        // "dataConsegna" => "2020-03-27"
        // "messaggio" => "aecqwcw"

        if($dataRitiro <=$dataConsegna){
            $name = $request->input('name');
            $email = $request->input('email');
            $dataRitiro = $request->input('dataRitiro');
            $dataConsegna = $request->input('dataConsegna');
            $messaggio = $request->input('messaggio');


            $bag = compact('name','email','dataRitiro','dataConsegna','messaggio');

            $emailAdmin="diegocampanella97@gmail.com";

            $contactMail = new NoleggioMailed($bag);
            Mail::to($emailAdmin)->send($contactMail);

            return redirect()->route('noleggio.thanks');

        } else {
            $request->session()->flash('flag','Errore nel selezionare le date!');
            return redirect()->route('noleggio');
        }
    }


    // "name" => "Hermione Beach"
    // "email" => "hemato@mailinator.net"
    // "oggetto" => "Qui cillum esse ani"
    // "messaggio" => "Iusto eum quisquam u"
    // "consent" => "1"

    public function contattiSubmit(ContattiRequest $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $oggetto = $request->input('oggetto');
        $messaggio = $request->input('messaggio');

        $bag = compact('name','email','oggetto','messaggio');

        $emailAdmin="diegocampanella97@gmail.com";

        $contactMail = new ContattiMailed($bag);
        Mail::to($emailAdmin)->send($contactMail);

        return redirect()->route('contatti.thanks');


    }

}
