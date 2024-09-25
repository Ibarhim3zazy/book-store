<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowPermissionBlock extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $permissions, public $category, public $role=null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-permission-block');
    }
}
