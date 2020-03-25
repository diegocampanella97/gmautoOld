<?php

namespace App;

use App\Car;
use App\Transmission;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Transmission
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transmission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Transmission extends Model
{
    static public function getAll(){
        return Transmission::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
