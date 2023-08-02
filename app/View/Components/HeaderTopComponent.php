<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class HeaderTopComponent extends Component
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
        $settings = Setting::firstOrFail();
        return view('components.header-top-component', ['settings' => $settings]);
    }
}
