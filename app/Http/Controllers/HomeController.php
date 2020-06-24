<?php

namespace App\Http\Controllers;

use App\Car;
use DateTime;
use App\Producer;
use Carbon\Carbon;
use App\Mail\ContactGeneral;
use App\Mail\ContattiMailed;
use App\Mail\NoleggioMailed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function address(){
        return $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'];
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
        $carsID = Car::search($request->input('query'))->pluck('id');

        $cars=
            Car::
            with(['preparations.exemplar.producer','images'])->
            whereIn('id',$carsID)->
            where('approved','=',1)->
            get();
        ;

        // dd($cars);

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

        if($dataRitiro <=$dataConsegna){
            $name = $request->input('name');
            $email = $request->input('email');
            $dataRitiro = $request->input('dataRitiro');
            $dataConsegna = $request->input('dataConsegna');
            $messaggio = $request->input('messaggio');


            $bag = compact('name','email','dataRitiro','dataConsegna','messaggio');

            $emailAdmin="gmautomobili@gmail.com";

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
        $emailAdmin="gmautomobili@gmail.com";

        $contactMail = new ContactGeneral($bag);
        Mail::to($emailAdmin)
        ->send($contactMail);

        return redirect()->route('contatti.thanks');

    }    
    
    public function contattiCarSubmit(ContattiRequest $request){
        $car = Car::find($request->input('idAuto'));
        $name = $request->input('name');
        $email = $request->input('email');
        $oggetto = $request->input('oggetto');
        $messaggio = $request->input('messaggio');

        $bag = compact('name','email','oggetto','messaggio','car');
//        dd($bag);
        $emailAdmin="gmautomobili@gmail.com";

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
        where('producers.slug','=',$id)->
        pluck('cars.id');

        $cars=
            Car::
            with(['preparations.exemplar.producer','images'])->
            whereIn('id',$carsFind)->
            where('approved',1)->
            paginate(15)
        ;

//        dd($cars);

        $paginate=true;

        return view('usatoAuto.search',compact('cars','paginate'));
    }


    public function indexCar(){

        OpenGraph::setTitle('Galleria - Gm Autoveicoli')
        ->setUrl('https://gmautoveicoli.it')
        ->setDescription('')
        ->setType('article')
        ->setArticle([
            'published_time' => 'datetime',
            'modified_time' => 'datetime',
            'expiration_time' => 'datetime',
            'author' => 'profile / array',
            'section' => 'string',
            'tag' => 'string / array'
        ])
        ->addImage(['url' => 'https://image.freepik.com/free-psd/man-car-with-business-card-mockup_23-2148018111.jpg', 'size' => 300]);


        return view('cars.search');
    }


    public function goUsatoDettaglio($id,$slug){
        $images = null;
        // dd($id->slug);
        // $car = Car::with([
        //     'preparations.exemplar.producer','images','fuel',
        //     'transmission','kilometers','color','door'
        // ])->findOrFail($id);
        
        $car = Car::with([
            'preparations.exemplar.producer','images','fuel',
            'transmission','kilometers','color','door'
        ])
        ->where('slug',$slug)
        ->where('id',$id)
        ->firstOrFail();

        // dd($car->images->first()->filePath);
        // dd("localhost:8000".$car->images->first() -> getUrl(800,570));
        
        if($car->images->count()>0){
            $images = $this->address().$car->images->first() -> getUrl(800,570);
        } else {
            $images = "https://images.unsplash.com/photo-1531137199527-9546e8290fd4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80";
        }

        // dd($images);

        if($car->approved == 0) {
            if(Auth::user()){
                return view('usatoAuto.detail',compact('car'));
            }
            return redirect()->route('home');
        }



        OpenGraph::setTitle($car->name. ' - Gm Autoveicoli')
        ->setUrl('https://gmautoveicoli.it')
        ->setDescription('Per richieste di informazioni o assistenza per la tua auto. Siamo a tua disposizione.')
        ->setType('article')
        ->setArticle([
            'published_time' => 'datetime',
            'modified_time' => 'datetime',
            'expiration_time' => 'datetime',
            'author' => 'profile / array',
            'section' => 'string',
            'tag' => 'string / array'
        ])
        ->addImage(['url' => $images, 'size' => 300]);
        
        return view('usatoAuto.detail',compact('car'));
    }   

}
