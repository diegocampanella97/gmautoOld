<?php

namespace App;

use App\Car;
use App\Jobs\ResizeImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereACreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CarImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CarImage extends Model{

    use SoftDeletes;

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    static public function getUrlByFileName($filePath, $w = null , $h = null){
        if(!$w && !$h) {
            return Storage::url($filePath);
        }

        $path= dirname($filePath);
        $fileName= basename($filePath);

        $file= "{$path}/crop{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }

    public function getUrl($w = null , $h = null){
        return CarImage::getUrlByFileName($this->filePath, $w , $h);
    }


}
