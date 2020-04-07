<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarImage;
use App\Exemplary;
use App\Jobs\ResizeImage;
use App\Preparation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function goAreaRiservata(){
        return view('adminZone.home');
    }

    public function goAggiungiAuto(Request $request){
        $uniqueSecret = $request->old('uniqueSecret',base_convert(sha1(uniqid(mt_rand())),16,32));
        return view('adminZone.wizard',compact('uniqueSecret'));
    }

    public function submitAdd(Request $request){


//        dump($request->input());

        $preparation = Preparation::find($request->input("preparation"));
//        dd($preparation);

        $car = new Car();

        $car->name= $preparation->exemplar->producer->name." | ".$preparation->exemplar->name." - ".$preparation->name;

        $car->targa = $request->input("targaVeicolo");
        $car->description = $request->input("testoAnnuncio");
        $car->price = $request->input("prezzoVeicolo");
        $car->color_id = $request->input("coloreVeicolo");
        $car->vid = $request->input("vinVeicolo");
        $car->mouth = $request->input("meseImmatricolazione");
        $car->year = $request->input("AnnoImmatricolazione");
        $car->fuel_id= $request->input("carburanteVeicolo");
        $car->transmission_id = $request->input("cambioVeicolo");
        $car->grade_id = $request->input("classeVeicolo");
        $car->seat_id = $request->input("postiVeicolo");
        $car->door_id = $request->input("porteVeicolo");
        $car->preparations_id = $request->input("preparation");
        $car->kilometers_id = $request->input("kmVeicolo");
        $car->hai  = $request->input("categoriaVeicolo");

        $car->save();

        $unique = $request->input('uniqueSecret');

        $images= session() -> get("images.{$unique}", []);
        $removedImages = session() -> get("removedimages.{$unique}", []);

        $images = array_diff($images, $removedImages);

        foreach ($images as $image) {
            $i= new CarImage();
            $fileName = basename($image);
            $newFileName= "public/cars/{$car -> id}/{$fileName}";

            Storage::move($image, $newFileName);

            dispatch(
                new ResizeImage( $newFileName,800,570)
            );

            $i->filePath = $newFileName;
            $i->car_id = $car->id;

            $i->save();

            // GoogleVisionSafeSearchImage::withChain([
            //     new GoogleVisionLabelImage($i->id),
            //     new GoogleVisionRemoveFace($i->id),
            //     new ResizeImage($newFileName, 870, 530)
            // ])->dispatch($i->id);


        }

        File::deleteDirectory(storage_path("/app/public/temp/{$unique}"));


        return redirect(route("admin.areaRiservata"));
    }

    public function uploadPhoto(Request $request) {
        $unique = $request->input('uniqueSecret');

        $fileName = $request->file('file') -> store("public/temp/{$unique}");

        // dispatch(new ResizeImage($fileName, 120, 120));

        session()->push("images.{$unique}", $fileName);


        return response()->json(
            [
                'id' => $fileName
            ]
        );
    }

    public function removePhoto(Request $request) {
        $unique = $request->input('uniqueSecret');

        $fileName = $request->input('id');

        session()->push("removedimages.{$unique}", $fileName);

        Storage::delete($fileName);

        return response()->json('rimozione riuscita con successo');

    }

    public function getImages(Request $request){
        $unique = $request->input('uniqueSecret');

        $images= session() -> get("images.{$unique}", []);
        $removedImages = session() -> get("removedimages.{$unique}", []);

        $images = array_diff($images, $removedImages);
        $data=[];

        foreach($images as $image){
            $data[] = [
                'id' => $image,
                // 'src' => Storage::url($image),
                'src' => CarImage::getUrlByFileName($image, 120, 120),
            ];
        }

        return response()->json($data);

    }

    public function golista(){
        $cars = Car::all();

        return view('adminZone.listCar',compact('cars'));
    }

    public function getExemplary($id)
    {
        $states = Exemplary::where("producers_id",$id)->pluck("name","id");
        return json_encode($states);
    }
    public function getPreparation($id)
    {
        $states = Preparation::where("exemplaries_id",$id)->pluck("name","id");
        return json_encode($states);
    }






}
