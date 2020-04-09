<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{

    protected $fillable = [
        'name',
        'idExt',
        'exemplaries_id'
    ];

    public function exemplar(){
        return $this->belongsTo(Exemplary::class,'exemplaries_id');
    }

    public function cars(){
        return $this->hasMany(Car::class,'preparations_id');
    }
}
