<?php

namespace App;

use App\Door;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    static public function getAll(){
        return Door::all();
    }
}
