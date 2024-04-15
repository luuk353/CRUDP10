<?php

namespace App\View\Components\section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    public $name;
    public $id;
    public $placeholder;

    public function __construct($name, $id, $placeholder)
    {
        $this->name = $name;
        $this->id = $id;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.textarea');
    }
}
