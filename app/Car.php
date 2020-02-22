<?php

namespace App;

use App\Car;
use App\CarImage;
use Illuminate\Database\Eloquent\Model;

class Car extends Model{
    protected $fillable = [
        'name', 'category_id'
    ];

    static public function getLastCar(){
        return Car::take(3)->get();
    }

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }
}
