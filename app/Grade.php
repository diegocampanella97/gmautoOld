<?php

namespace App;

use App\Grade;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    static public function getAll(){
        return Grade::all();
    }
}
