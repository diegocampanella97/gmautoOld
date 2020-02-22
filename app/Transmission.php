<?php

namespace App;

use App\Transmission;
use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    static public function getAll(){
        return Transmission::all();
    }
}
