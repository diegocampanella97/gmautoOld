<?php

namespace App\Http\Livewire;

use App\Car;
use Livewire\Component;

class FormSearchCustom extends Component
{

    public $name = "Diego";
    public $item = null;


    public $producers;
    public $kilometers;
    public $tipologies;

    public $fuel;
    public $color;
    public $transmission;
    public $grade;
    public $seat;
    public $door;


    public function insertCar(){


        $this->item = Car::all();

        if($this->producers != null) {
            $carsFind=Car::
            join('preparations','cars.preparations_id','=','preparations.id')->
            join('exemplaries','exemplaries_id','=','exemplaries.id')->
            join('producers','producers_id','=','producers.id')->
            where('producers.id','=',$this->producers)->
            pluck('cars.id');

            $this->item=
                Car::
                whereIn('id',$carsFind)->
                get();
        }


        if($this->tipologies != null) {
            $this->item = $this->item->where('tipology_id','=',$this->tipologies);
        }

        if($this->kilometers != null) {
            $this->item = $this->item->where('kilometers_id','=',$this->kilometers);
        }

        if($this->fuel != null) {
            $this->item = $this->item->where('fuel_id','=',$this->fuel);
        }

        if($this->color != null) {
            $this->item = $this->item->where('color_id','=',$this->color);
        }

        if($this->transmission != null) {
            $this->item = $this->item->where('transmission_id','=',$this->transmission);
        }

        if($this->grade != null) {
            $this->item = $this->item->where('grade_id','=',$this->grade);
        }

        if($this->seat != null) {
            $this->item = $this->item->where('seat_id','=',$this->seat);
        }

        if($this->door != null) {
            $this->item = $this->item->where('door_id','=',$this->door);
        }


    }

    public function render()
    {
        return view('livewire.form-search-custom');
    }
}
