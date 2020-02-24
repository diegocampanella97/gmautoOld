<?php

namespace App;

use App\Car;
use App\Door;
use App\Fuel;
use App\CarImage;
use App\Exemplar;
use App\Collection;
use App\Transmission;
use Illuminate\Database\Eloquent\Model;

class Car extends Model{
    protected $fillable = [
        'name', 'category_id'
    ];

    static public function getLastCar(){
        return Car::take(3)->orderBy('updated_at', 'desc')->get();
    }

    public function images(){
        return $this->hasMany(CarImage::class);
    }

    public function exemplar(){
        return $this->belongsTo(Exemplar::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class);
    }

    public function transmission(){
        return $this->belongsTo(Transmission::class);
    }

    public function door(){
        return $this->belongsTo(Door::class);
    }

    public function fuel(){
        return $this->belongsTo(Fuel::class);
    }


}
