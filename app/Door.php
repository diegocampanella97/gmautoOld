<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Door
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Door newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Door newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Door query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Door whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Door whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Door whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Door whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Door extends Model
{
    protected $fillable = ['name'];

    static public function getAll(){
        return Door::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
