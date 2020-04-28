<?php

namespace App;

use App\Customer;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Car
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $category_id
 * @property string $targa
 * @property int $exemplar_id
 * @property string $mounting
 * @property int $km
 * @property string $description
 * @property int $price
 * @property int $color_id
 * @property string $vid
 * @property int $collection_id
 * @property int $mouth
 * @property int $year
 * @property int $fuel_id
 * @property int $transmission_id
 * @property int $grade_id
 * @property int $seat_id
 * @property int $door_id
 * @property int $approved
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Collection $collection
 * @property-read \App\Color $color
 * @property-read \App\Door $door
 * @property-read \App\Exemplar $exemplar
 * @property-read \App\Fuel $fuel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CarImage[] $images
 * @property-read int|null $images_count
 * @property-read \App\Transmission $transmission
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Car onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereCollectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereDoorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereExemplarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereFuelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereKm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereMounting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereMouth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereSeatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereTarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereTransmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereVid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereYear($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Car withoutTrashed()
 * @mixin \Eloquent
 */
class Car extends Model{

    use Searchable;
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    protected $fillable = [
        'name', 'targa','description','price','color_id','vid',
        'mouth','year','fuel_id','transmission_id','grade_id',
        'seat_id','door_id','preparations_id','kilometers_id','tipology_id','approved'
    ];


    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'name' => $this->name,
            'collection' => $this->preparations->name,
            'exemplar' => $this->preparations->exemplar->name,
            'producer' => $this->preparations->exemplar->producer->name,
        ];

        // Customize array...

        return $array;
    }

    static public function getLastCar(){
        return Car::take(3)->with(['preparations.exemplar.producer','images'])
        ->where('approved','=',true)
        ->orderBy('updated_at', 'desc')
        ->get();
    }

    public function images(){
        return $this->hasMany(CarImage::class);
    }

    public function preparations(){
        return $this->belongsTo(Preparation::class);
    }

    public function transmission(){
        return $this->belongsTo(Transmission::class);
    }

    public function door(){
        return $this->belongsTo(Door::class);
    }

    public function fuel(){
        return $this->belongsTo(Fuel::class);
    }

    public function kilometers(){
        return $this->belongsTo(Kilometers::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }

    static public function getCarApproved(){
        // Debugbar::startMeasure('render','Time for loading car');

            return Car::with([
                'preparations.exemplar.producer',
                'images'])
            ->where('approved','=',true)->paginate(15);
        // Debugbar::stopMeasure('render');
    }

    public function euroClass(){
        return $this->belongsTo(Grade::class,'grade_id');
    }

    public function seat(){
        return $this->belongsTo(Seat::class);
    }

    public function tipology(){
        return $this->belongsTo(Typology::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

}
