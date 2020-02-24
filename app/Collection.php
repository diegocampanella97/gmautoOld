<?php

namespace App;

use App\Car;
use App\Exemplar;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function exemplar(){
        return $this->belongsTo(Exemplar::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }

}
