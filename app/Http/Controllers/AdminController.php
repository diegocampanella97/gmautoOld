<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarImage;
use App\Exemplary;
use App\Preparation;
use App\Jobs\ResizeImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $preparation = Preparation::find($request->input("preparation"));

        $car = new Car();

        $car->name= $preparation->exemplar->producer->name." | ".$preparation->exemplar->name." - ".$preparation->name;
        
        
        $car->targa = Str::of($request->input("targaVeicolo"))->upper();
        $car->description = $request->input("testoAnnuncio");
        $car->price = $request->input("prezzoVeicolo");
        $car->color_id = $request->input("coloreVeicolo");
        $car->vid = Str::of($request->input("vinVeicolo"))->upper();
        $car->mouth = $request->input("meseImmatricolazione");
        $car->year = $request->input("AnnoImmatricolazione");
        $car->fuel_id= $request->input("carburanteVeicolo");
        $car->transmission_id = $request->input("cambioVeicolo");
        $car->grade_id = $request->input("classeVeicolo");
        $car->seat_id = $request->input("postiVeicolo");
        $car->door_id = $request->input("porteVeicolo");
        $car->preparations_id = $request->input("preparation");
        $car->kilometers_id = $request->input("kmVeicolo");
        $car->tipology_id  = $request->input("categoriaVeicolo");
        $car->slug  = Str::slug($car->name, '-');

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

    private function checkValueField($car, $text){
        if($car!=$text){
            $car=$text;
        }
        return $car;
    }

    public function submitEdit(Request $request,$id){
        $car = Car::find($id);

        $car->name=$this->checkValueField($car->name, $request->input("titolo"));
        $car->targa = $this->checkValueField($car->targa,$request->input("targaVeicolo"));
        $car->description = $this->checkValueField($car->description,$request->input("testoAnnuncio"));

        $car->price = $this->checkValueField($car->price,$request->input("prezzoVeicolo"));
        $car->color_id = $this->checkValueField($car->color_id,$request->input("coloreVeicolo"));
        $car->vid = $this->checkValueField($car->vid,$request->input("vinVeicolo"));
        $car->mouth = $this->checkValueField($car->mouth,$request->input("meseImmatricolazione"));
        $car->year = $this->checkValueField($car->year,$request->input("AnnoImmatricolazione"));

        $car->fuel_id=$this->checkValueField($car->fuel_id, $request->input("carburanteVeicolo"));
        $car->transmission_id = $this->checkValueField($car->transmission_id,$request->input("cambioVeicolo"));
        $car->grade_id = $this->checkValueField($car->grade, $request->input("classeVeicolo"));
        $car->seat_id = $this->checkValueField($car->seat, $request->input("postiVeicolo"));
        $car->door_id = $this->checkValueField($car->door, $request->input("porteVeicolo"));
        $car->kilometers_id = $this->checkValueField($car->kilometers, $request->input('kmVeicolo'));
        $car->tipology_id = $this->checkValueField($car->tipology, $request->input('categoriaVeicolo'));

        if($request->input("preparation")!=0){
            $car->preparations_id = $request->input("preparation");
        }

        $car->save();
//        dd($car);
        return redirect()->route('auto.dettaglio',['id'=>$car->id]);
    }

    public function approva($id){
        $car = Car::findOrFail($id);

        if(!Auth::user()){
            return redirect()->route('home');
        }

        if($car->approved == 1){
            $car->approved = 0;
        } else {
            $car->approved = 1;
        }

        $car->save();

        // return redirect()->route('admin.listaAuto');
        return redirect()->back();
    }

    public function cancella($id){
        $car = Car::findOrFail($id);

        if(!Auth::user()){
            return redirect()->route('home');
        }

        $car->delete();


        return redirect()->route('admin.listaAuto');

    }
    


}
