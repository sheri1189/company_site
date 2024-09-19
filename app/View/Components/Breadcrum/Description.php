<?php

namespace App\View\Components\Breadcrum;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Description extends Component
{
    public $description;
    /**
     * Create a new component instance.
     */
    public function __construct($description)
    {
        $this->description=$description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrum.description');
    }
}
