<?php

namespace App;

use App\Car;
use App\Door;
use App\Fuel;
use Debugbar;
use App\Color;
use App\CarImage;
use App\Exemplar;
use App\Collection;
use App\Transmission;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model{

    use Searchable;
    use SoftDeletes;

    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'name' => $this->name,
            'carName' => $this->collection->name,
            'carName' => $this->exemplar->name
        ];

        // Customize array...

        return $array;
    }

    

    protected $fillable = [
        'name', 'category_id'
    ];

    static public function getLastCar(){
        return Car::take(3)->with(['collection','exemplar','images'])->orderBy('updated_at', 'desc')->get();
    }


    public function images(){
        return $this->hasMany(CarImage::class);
    }

    public function exemplar(){
        return $this->belongsTo(Exemplar::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class);
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

    public function color(){
        return $this->belongsTo(Color::class);
    }

    static public function getCarApproved(){
        // Debugbar::startMeasure('render','Time for loading car');
            return Car::with([
                'collection' => function($q) {$q->select('id', 'name');},
                'exemplar' => function($q) {$q->select('id', 'name');},
                'images'])
            ->where('approved','=',true)->paginate(10);
        // Debugbar::stopMeasure('render');
    }


}
