<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Seat
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seat whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Seat extends Model
{
    protected $fillable = ['name'];

    static public function getAll(){
        return Seat::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
