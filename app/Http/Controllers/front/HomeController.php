<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\HeaderBanner;
use App\Models\SectionTitles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $headerBanner = HeaderBanner::all();
        $descriptions = SectionTitles::all();
        return view('front.home', ['headerBanner' => $headerBanner, 'descriptions' => $descriptions]);
    }
}
