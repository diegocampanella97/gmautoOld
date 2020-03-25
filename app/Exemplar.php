<?php

namespace App;

use App\Car;
use App\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Exemplar
 *
 * @property int $id
 * @property string $name
 * @property string $name_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Car[] $car
 * @property-read int|null $car_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Collection[] $collection
 * @property-read int|null $collection_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar whereNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Exemplar whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Exemplar extends Model{

    public function collection(){
        return $this->hasMany(Collection::class);
    }

    public function car(){
        return $this->hasMany(Car::class);
    }

}
