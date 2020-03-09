<?php

namespace App;

use App\Car;
use App\Color;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //

    static public function getColors(){
        return Color::all();
    }

    public function car(){
        return $this->hasMany(Car::class);
    }
}
