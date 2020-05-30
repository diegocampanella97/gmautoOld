<?php

namespace App\Http\Controllers;

use App\CarImage;
use App\Http\Requests\ImageRequest;
use App\Jobs\ResizeImage;
use App\r;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete($id)
    {
        $carImage=CarImage::find($id);
        $carImage->delete();

        return redirect()->route('auto.dettaglio',['id' => $carImage->car_id,'slug' => $carImage->slug]);
    }

    public function rating($id)
    {
        $carImage=CarImage::find($id);

        if(is_null($carImage->order)){
            $carImage->order=1;
        } else {
            $carImage->order=null;
        }

        $carImage->save();
        return redirect()->route('auto.dettaglio',['id' => $carImage->car_id,'slug' => $carImage->slug]);
    }
    public function addImage($id,ImageRequest $request){

        $filePath=$request -> file('imgPhoto')->store("public/cars/{$id}");

        dispatch(
            new ResizeImage( $filePath,800,570)
        );

        $i= new CarImage();
        $i->filePath = $filePath;
        $i->car_id = $id;

        $i->save();

        return redirect()->route('auto.dettaglio',['id' => $id, 'slug' => $id->slug]);


    }




//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
////
////    /**
////     * Display the specified resource.
////     *
////     * @param  \App\r  $r
////     * @return \Illuminate\Http\Response
////     */
////    public function show(r $r)
//    {
//        //
//    }
//    public function edit(r $r)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\r  $r
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, r $r)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\r  $r
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(r $r)
//    {
//        //
//    }
}
