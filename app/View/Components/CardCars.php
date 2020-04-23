<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardCars extends Component
{
    public $item;

    /**
     * Create a new component instance.
     *
     * @param $car
     */
    public function __construct($car)
    {
        $this->item = $car;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-cars');
    }
}
