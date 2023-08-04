<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceMainController extends Controller
{
    public function index($id) {
        $service = Services::findOrFail($id);
        return view('front.service', ['service' => $service]);
    }
}
