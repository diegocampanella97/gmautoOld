<?php

namespace App\Http\Livewire;

use App\Car;
use Livewire\Component;

class FormSearchCustom extends Component
{

    public $name = "Diego";
    public $item = null;
    public $model;

    public function addPlusName(){
        $this->name = "";
        $this->name = $this->name . "+";
    }

    public function insertCar(){
//        $this->item=null;

        $carsFind=Car::
            join('preparations','cars.preparations_id','=','preparations.id')->
            join('exemplaries','exemplaries_id','=','exemplaries.id')->
            join('producers','producers_id','=','producers.id')->
            where('producers.id','=',$this->model)->
            pluck('cars.id');

        $this->item=
            Car::
            with(['preparations.exemplar.producer','images'])->
            whereIn('id',$carsFind)->
            get();
        ;


//        $this->item = $cars;

    }

    public function render()
    {
        return view('livewire.form-search-custom');
    }
}
