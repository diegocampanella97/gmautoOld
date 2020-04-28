<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function cars(){
        return $this->hasMany(Car::class,'customer_id');
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('nome', 'like', '%'.$query.'%')
                ->orWhere('cognome', 'like', '%'.$query.'%')
                ->orWhere('residenza', 'like', '%'.$query.'%')
                ->orWhere('email', 'like', '%'.$query.'%')
                ->orWhere('telefono', 'like', '%'.$query.'%');
    }
}
