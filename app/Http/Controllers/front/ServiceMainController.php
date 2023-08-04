<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceMainController extends Controller
{
    public function index($slug) {

        $service = Services::where('slug', $slug)->first();
  
        return view('front.service', ['service' => $service]);
    }
}
