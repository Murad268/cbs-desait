<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\HeaderBanner;
use App\Models\Portfolio;
use App\Models\PortfolioFilter;
use App\Models\SectionTitles;
use App\Models\Services;
use App\Models\Setting;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index() {
        $headerBanner = HeaderBanner::all();
        $descriptions = SectionTitles::all();
        $formTexts = ContactForm::firstOrFail();
        $settings = Setting::firstOrFail();
        $services = Services::where('service_id', 0)->get();
        $pFilter = PortfolioFilter::all();
        $portfolio = Portfolio::all();
        return view('front.home', ['headerBanner' => $headerBanner, 'descriptions' => $descriptions, 'formTexts' => $formTexts, 'settings' => $settings, 'services' => $services, 'pFilter' => $pFilter, 'portfolio' => $portfolio]);
    }
}
