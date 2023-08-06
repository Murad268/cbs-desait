<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceMainController extends Controller
{
    public function index($slug) {

        $service = Services::where('slug', $slug)->first();
        $lastService = Services::where("slug", 'diger-xidmetler')->first();
        return view('front.service', ['service' => $service, 'lastService' => $lastService]);
    }
}
