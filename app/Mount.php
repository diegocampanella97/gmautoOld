<?php

namespace App;

use App\Car;
use App\Mount;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Mount
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mount query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Mount extends Model
{
    static public function getAll(){
        return Mount::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
