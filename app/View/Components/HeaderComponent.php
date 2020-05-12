<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $img;

    public function __construct($title ,$img)
    {
        $this->title = $title;
        (!($img)=="") ? $this->img = $img : $this->img ="/images/bg_2.jpg";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header-component');
    }
}
