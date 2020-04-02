<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exemplary extends Model
{

    protected $fillable = [
        'name',
        'img_Path',
        'idExt',
        'producers_id'
    ];

    public function producer(){
        return $this->belongsTo(Producer::class,'producers_id');
    }

    public function preparations(){
        return $this->hasMany(Preparation::class,'exemplaries_id');
    }


}
