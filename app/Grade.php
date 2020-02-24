<?php

namespace App;

use App\Car;
use App\Grade;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    static public function getAll(){
        return Grade::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
