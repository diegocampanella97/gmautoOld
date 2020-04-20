<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModelCarImage extends Component
{
    public $car;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($car)
    {
        $this->car = $car;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.model-car-image');
    }
}
