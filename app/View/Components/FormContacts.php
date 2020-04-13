<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormContacts extends Component
{


    public $idAuto;

    public function __construct($idAuto)
    {

        $this->idAuto = $idAuto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form-contacts');
    }
}
