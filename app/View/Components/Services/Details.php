<?php

namespace App\View\Components\Services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Details extends Component
{
    public $title, $description,$class;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description,$class)
    {
        $this->title = $title;
        $this->description = $description;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services.details');
    }
}
