<?php

namespace App\View\Components\section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class label extends Component
{
    public $for;

    public function __construct($for)
    {
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.label');
    }
}