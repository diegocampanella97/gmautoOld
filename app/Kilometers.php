<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

class Kilometers extends Model
{
    protected $fillable = ['name'];

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
