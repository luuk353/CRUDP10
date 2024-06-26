<?php

namespace App\View\Components\landingpage;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BoxLink extends Component
{
    public $href;

    public function __construct($href)
    {
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.landingpage.box-link');
    }
}
