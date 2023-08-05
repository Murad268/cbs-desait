<?php

namespace App\View\Components;

use App\Models\Services;
use App\Models\Setting;
use Illuminate\View\Component;

class HomeFooterComponent extends Component
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
        $services = Services::where("service_id", 0)->get();
        if ($services->count() > 0) {
            $services->pop();
        }
        $lastService = Services::where("slug", 'diger-xidmetler')->first();
        return view('components.home-footer-component', ['settings' => $settings, 'services' => $services, 'lastService' => $lastService]);
    }
}
