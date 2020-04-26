<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModelApprovedCar extends Component
{
    public $car;

    public function __construct($car)
    {
        $this->car = $car;
    }

    public function render()
    {
        return view('components.model-approved-car');
    }
}
