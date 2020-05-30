<?php

namespace App\Http\Controllers;

use App\Car;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("morto");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->nome = $request->input('nome');
        $customer->cognome = $request->input('cognome');
        $customer->residenza = $request->input('residenza');
        $customer->email = $request->input('email');
        $customer->telefono = $request->input('telefono');
        $customer->save();

        $car = Car::find($request->input('car_id'));
        $car->approved=0;
        $car->customer_id = $customer->id;

        // dd($car); 
        $car->save();

        return redirect()->route('auto.dettaglio',['id' => $car->id ,'slug' => $car->slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
