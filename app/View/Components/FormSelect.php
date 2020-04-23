<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $listValue;
    public $title;
    public $model;

    /**
     * Create a new component instance.
     *
     * @param $listValue
     */
    public function __construct($title,$listValue,$model)
    {
        $this->title = $title;
        $this->listValue = $listValue;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form-select');
    }
}
