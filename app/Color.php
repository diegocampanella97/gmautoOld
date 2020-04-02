<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Color
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Car[] $car
 * @property-read int|null $car_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Color extends Model
{
    protected $fillable = ['name'];

    static public function getColors(){
        return Color::all();
    }

    public function car(){
        return $this->hasMany(Car::class);
    }
}
