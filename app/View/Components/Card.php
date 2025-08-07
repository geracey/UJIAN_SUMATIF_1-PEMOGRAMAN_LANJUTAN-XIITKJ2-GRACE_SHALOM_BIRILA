<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $heading;
    public function __construct($heading)
    {
        $this-> heading = $heading;
    }
    public function render()
    {
        return view('components.card');
    }
}

