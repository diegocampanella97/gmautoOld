<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\OpenGraph;

class FrontendController extends Controller {

    public function goNoleggio(){
        return view('noleggio.home');
    }

    public function goContatti(){
        return view('contatti.home');
    }

    public function goUsato(){
        return view('usatoAuto.home');
    }

    public function goUsatoDettaglio($id){

        $car = Car::with([
            'preparations.exemplar.producer','images','fuel',
            'transmission','kilometers','color','door'
        ])->findOrFail($id);

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
        ->addImage(['url' => 'https://images.unsplash.com/photo-1531137199527-9546e8290fd4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80', 'size' => 300]);
        
        return view('usatoAuto.detail',compact('car'));
    }



}
