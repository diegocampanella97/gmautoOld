<?php

namespace App\Http\Controllers;

use App\Mail\ContactGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request){
        $name=$request->input('name');
        $message=$request->input('message');
        $email=$request->input('email');
        $phone=$request->input('phone');

        $bag=compact('name','message','email','phone');
        $contactMail= new ContactGeneral($bag);

        $emailAmministratore='diegocampanella97@gmail.com';
        Mail::to($emailAmministratore)->send($contactMail);

    }

    public function thankyou(){
        dd("Risposta Grazie");
    }
}
