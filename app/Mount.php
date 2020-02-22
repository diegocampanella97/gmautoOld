<?php

namespace App;

use App\Mount;
use Illuminate\Database\Eloquent\Model;

class Mount extends Model
{
    static public function getAll(){
        return Mount::all();
    }
}
