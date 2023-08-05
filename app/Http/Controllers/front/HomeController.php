<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ChooseUs_commentsb;
use App\Models\ChoseUsCompany;
use App\Models\ContactForm;
use App\Models\HeaderBanner;
use App\Models\Portfolio;
use App\Models\PortfolioFilter;
use App\Models\SectionTitles;
use App\Models\Services;
use App\Models\Setting;
use App\Models\Still;
use App\Models\Team;
use App\Models\WorkProccess;

class HomeController extends Controller
{
    public function index() {
        $headerBanner = HeaderBanner::orderBy('order')->get();;
        $descriptions = SectionTitles::all();
        $formTexts = ContactForm::firstOrFail();
        $settings = Setting::firstOrFail();
        $services = Services::where('service_id', 0)->get();
        $pFilter = PortfolioFilter::orderBy('order')->get();
        $portfolio = Portfolio::orderBy('order')->get();
        $companies = ChoseUsCompany::orderBy('order')->get();
        $comments = ChooseUs_commentsb::orderBy('order')->get();
        $proccessess = WorkProccess::orderBy('order')->get();;
        $still = Still::firstOrFail();
        $team = Team::orderBy('order')->get();
        return view('front.home', ['headerBanner' => $headerBanner, 'descriptions' => $descriptions, 'formTexts' => $formTexts, 'settings' => $settings, 'services' => $services, 'pFilter' => $pFilter, 'portfolio' => $portfolio, 'companies' => $companies, 'comments' => $comments, 'proccessess' => $proccessess, 'still' => $still, 'team' => $team]);
    }
}
