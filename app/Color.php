<?php

namespace App;

use App\Color;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //

    static public function getColors(){
        return Color::all();
    }
}
