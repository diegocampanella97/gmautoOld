<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardFAQ extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $faq;
    public $number;


    public function __construct($faq,$number)
    {
        $this->faq = $faq;
        $this->number = $number;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-f-a-q');
    }
}
