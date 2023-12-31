<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class frontNavbarComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $settings = Setting::first();
        return view('components.front-navbar-component', ['settings' => $settings]);
    }
}
