<?php

namespace App;

use App\Car;
use App\Exemplar;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Collection
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $exemplar_id
 * @property-read \App\Car $car
 * @property-read \App\Exemplar $exemplar
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection whereExemplarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collection whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Collection extends Model
{
    public function exemplar(){
        return $this->belongsTo(Exemplar::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }

}
