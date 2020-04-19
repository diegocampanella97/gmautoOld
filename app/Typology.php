<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    protected $fillable = ['name'];

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
