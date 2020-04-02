<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Fuel
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Fuel extends Model
{

    protected $fillable = ['name'];

    static public function getAll(){
        return Fuel::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
