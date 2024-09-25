<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ShowTableRow extends Component
{

    public $profilePhotoUrl;
    /**
     * Create a new component instance.
     */
    public function __construct(public LengthAwarePaginator $provider, public $path)
    {
        $this->profilePhotoUrl = Str::substr($path, strrpos($path, '.') +1) . '/profile';
        // dd($profilePhotoUrl);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-table-row');
    }
}
