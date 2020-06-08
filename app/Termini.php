<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Termini extends Model
{
    public static function showTermini(){
        return Termini::find(1)->testoAnnuncio;
    }
}
