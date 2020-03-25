<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

/**
 * App\CarImage
 *
 * @property int $id
 * @property string $filePath
 * @property int $car_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CarImage extends Model{
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
