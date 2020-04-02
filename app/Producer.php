<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'img_Path',
        'idExt'
    ];


    public function exemplars(){
        return $this->hasMany(Exemplary::class,'producers_id');
    }
}
