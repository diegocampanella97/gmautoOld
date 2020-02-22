<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarImage;
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
        return view('adminZone.addAuto',compact('uniqueSecret'));
    }

    public function submitAdd(Request $request){
        // dd($request->input());

        $car = new Car();
        $car->name= $request->input("titoloAnnuncio");
        $car->category_id = $request->input("categoriaVeicolo");
        $car->targa = $request->input("targaVeicolo");
        $car->exemplar_id= $request->input("produttoreVeicolo");
        $car->mounting= $request->input("allestimentoVeicolo");
        $car->km = $request->input("kmVeicolo");
        $car->description = $request->input("testoAnnuncio");
        $car->price = $request->input("prezzoVeicolo");
        $car->color_id = $request->input("coloreVeicolo");
        $car->vid = $request->input("vinVeicolo");
        $car->collection_id = $request->input("modelloVeicolo");
        $car->mouth = $request->input("meseImmatricolazione");
        $car->year = $request->input("AnnoImmatricolazione");
        $car->fuel_id= $request->input("carburanteVeicolo");
        $car->transmission_id = $request->input("cambioVeicolo");
        $car->grade_id = $request->input("classeVeicolo");
        $car->seat_id = $request->input("postiVeicolo");
        $car->door_id = $request->input("porteVeicolo");

        $car->save();


        $unique = $request->input('uniqueSecret');

        $images= session() -> get("images.{$unique}", []);
        $removedImages = session() -> get("removedimages.{$unique}", []);

        $images = array_diff($images, $removedImages);

        foreach ($images as $image) {
            $i= new CarImage();
            $fileName = basename($image);
            $newFileName= "public/car/{$car -> id}/{$fileName}";
            
            Storage::move($image, $newFileName);          
            
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


        // return redirect(route("auto.usato"));
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









}
