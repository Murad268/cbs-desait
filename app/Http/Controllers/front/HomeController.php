<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\HeaderBanner;
use App\Models\SectionTitles;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $headerBanner = HeaderBanner::all();
        $descriptions = SectionTitles::all();
        $formTexts = ContactForm::firstOrFail();
        $settings = Setting::firstOrFail();
        return view('front.home', ['headerBanner' => $headerBanner, 'descriptions' => $descriptions, 'formTexts' => $formTexts, 'settings' => $settings]);
    }
}
