<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $path, $fileName, $w, $h;

    public function __construct($fileName, $w, $h){
        $this->path= dirname($fileName);
        $this->fileName = basename($fileName);
        $this->w = $w;
        $this->h = $h;
    }

    public function handle(){
        $w = $this->w;
        $h = $this->h;

        $srcPath= storage_path() . '/app/' . $this-> path . '/' . $this->fileName;
        $destPath= storage_path() . '/app/' . $this-> path . "/crop{$w}x{$h}_" . $this->fileName;

        Image::load($srcPath)
            ->crop(Manipulations::CROP_CENTER, $w, $h)
            ->watermark(public_path('/images/gm_logo_white_crop.png'))
            ->save($destPath);
    }
}
