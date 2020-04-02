<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Grade
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Grade whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Grade whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Grade extends Model
{
    protected $fillable = ['name'];


    static public function getAll(){
        return Grade::all();
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
