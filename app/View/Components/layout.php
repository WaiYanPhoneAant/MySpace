<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class layout extends Component
{
    /**
     * Create a new component instance.
     */
    public $style;
    public $js;
    public function __construct($style,$js='')
    {
       $this->style=$style;
       $this->js= $js ?? '';
    //    dd($js);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
