<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alerts extends Component
{

    public $flag;
    public $text;

    public function __construct($flag,$text)
    {
        $this->flag = $flag;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.alerts');
    }
}
