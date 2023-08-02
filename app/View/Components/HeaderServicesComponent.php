<?php

namespace App\View\Components;

use App\Models\Services;
use Illuminate\View\Component;

class HeaderServicesComponent extends Component
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
        $services = Services::where('service_id', 0)->get();
        return view('components.header-services-component', ['services' => $services]);
    }
}
