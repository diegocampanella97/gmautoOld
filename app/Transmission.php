<?php

namespace App;

use App\Car;
use App\Transmission;
use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    static public function getAll(){
        return Transmission::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
