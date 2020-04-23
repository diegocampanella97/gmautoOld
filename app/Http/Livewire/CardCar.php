<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardCar extends Component
{
    public $car;

    public function render()
    {
        return view('livewire.card-car');
    }
}
