<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CurrecyFormat extends Component
{
    /**
     * Create a new component instance.
     */
    public $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        return view('components.currecy-format');
    }
}
