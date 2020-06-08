<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Http\Request;
use App\Http\Requests\FAQRequest;
use Artesaos\SEOTools\Facades\OpenGraph;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs= FAQ::all();

        OpenGraph::setTitle('FAQ - Gm Autoveicoli')
        ->setUrl('https://gmautoveicoli.it')
        ->setDescription('Per richieste di informazioni o assistenza per la tua auto. Siamo a tua disposizione.')
        ->addImage(['url' => 'https://www.tripsta.it/wp-content/uploads/trip-5.jpg', 'size' => 50]);

        return view('adminZone.faq',compact('faqs'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FAQRequest $request)
    {
        $faq = new FAQ();
        $faq->domanda= $request->input('request');
        $faq->risposta= $request->input('answer');
        $faq->save();

        return redirect()->route('faq.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $fAQ)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,FAQ $id)
    {

        // dd($request->input());
        $id->domanda = $request->input('request');
        $id->risposta= $request->input('answer');
        $id->save();

        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $id)
    {
        // dd($id);
        $id->delete();
        return redirect()->route('faq.index');
    }
}
