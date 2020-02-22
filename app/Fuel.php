<?php

namespace App;

use App\Fuel;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    static public function getAll(){
        return Fuel::all();
    }
}
