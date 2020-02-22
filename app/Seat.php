<?php

namespace App;

use App\Seat;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    static public function getAll(){
        return Seat::all();
    }
}
