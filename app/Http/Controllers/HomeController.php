<?php

namespace App\Http\Controllers;

use App\Car;
use DateTime;
use App\Producer;
use Carbon\Carbon;
use App\Mail\ContattiMailed;
use App\Mail\NoleggioMailed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContattiRequest;
use App\Http\Requests\NoleggioRequest;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;


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

        OpenGraph::setTitle('Home - Gm Autoveicoli')
            ->setUrl('https://gmautoveicoli.it')
            ->setDescription('Attivi sul territorio da oltre 30 anni, Gm Autoveicoli come attività a conduzione familiare offriamo alla clientela un vasto assortimento di autovetture usate plurimarche, selezionate e garantite.')
            ->setType('article')
            ->setArticle([
                'published_time' => 'datetime',
                'modified_time' => 'datetime',
                'expiration_time' => 'datetime',
                'author' => 'profile / array',
                'section' => 'string',
                'tag' => 'string / array'
            ])
            ->addImage(['url' => 'https://images.unsplash.com/photo-1531137199527-9546e8290fd4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80', 'size' => 300]);




        
        return view('home');
    }

    public function noleggio(){
        OpenGraph::setTitle('Noleggio - Gm Autoveicoli')
        ->setUrl('https://gmautoveicoli.it')
        ->setDescription('Per richieste di informazioni o assistenza per la tua auto. Siamo a tua disposizione.')
        ->addImage(['url' => 'https://www.tripsta.it/wp-content/uploads/trip-5.jpg', 'size' => 50]);

        return view('noleggio.homeNoleggio');
    }

    public function servizi(){
        return view('servizi.home');
    }

    public function contatti(){
        OpenGraph::setTitle('Contatti - Gm Autoveicoli')
        ->setUrl('https://gmautoveicoli.it')
        ->setDescription('Per richieste di informazioni o assistenza per la tua auto. Siamo a tua disposizione.')
        ->addImage(['url' => 'https://images.unsplash.com/photo-1531137199527-9546e8290fd4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80', 'size' => 50]);

        return view('contatti.home');
    }

    public function search(Request $request){

//        dd($request->input());
        $carsID = Car::search($request->input('query'))
            ->where('approved',1)
            ->pluck('id');

        $cars=
            Car::
            with(['preparations.exemplar.producer','images'])->
            whereIn('id',$carsID)->
            get();
        ;

//
        $paginate=false;

        return view('usatoAuto.search',compact('cars','paginate'));
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
        $idAuto = $request->input('idAuto');
        $name = $request->input('name');
        $email = $request->input('email');
        $oggetto = $request->input('oggetto');
        $messaggio = $request->input('messaggio');

        $bag = compact('name','email','oggetto','messaggio','idAuto');
//        dd($bag);
        $emailAdmin="diegocampanella97@gmail.com";

        $contactMail = new ContattiMailed($bag);
        Mail::to($emailAdmin)->send($contactMail);

        return redirect()->route('contatti.thanks');

    }

    public function searchForProducers($id){
//        $producer = Producer::find($id);
//        $cars = Car::search($producer->name)->paginate(50)->load(['preparations.exemplar.producer','images']);

        $carsFind=Car::
        join('preparations','cars.preparations_id','=','preparations.id')->
        join('exemplaries','exemplaries_id','=','exemplaries.id')->
        join('producers','producers_id','=','producers.id')->
        where('producers.id','=',$id)->
        pluck('cars.id');

        $cars=
            Car::
            with(['preparations.exemplar.producer','images'])->
            whereIn('id',$carsFind)->
            paginate(15)
        ;

//        dd($cars);

        $paginate=true;

        return view('usatoAuto.search',compact('cars','paginate'));
    }

}
