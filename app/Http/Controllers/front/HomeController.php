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
        $headerBanner = HeaderBanner::all();
        $descriptions = SectionTitles::all();
        $formTexts = ContactForm::firstOrFail();
        $settings = Setting::firstOrFail();
        $services = Services::where('service_id', 0)->get();
        $pFilter = PortfolioFilter::all();
        $portfolio = Portfolio::all();
        $companies = ChoseUsCompany::all();
        $comments = ChooseUs_commentsb::all();
        $proccessess = WorkProccess::all();
        $still = Still::firstOrFail();
        $team = Team::all();
        return view('front.home', ['headerBanner' => $headerBanner, 'descriptions' => $descriptions, 'formTexts' => $formTexts, 'settings' => $settings, 'services' => $services, 'pFilter' => $pFilter, 'portfolio' => $portfolio, 'companies' => $companies, 'comments' => $comments, 'proccessess' => $proccessess, 'still' => $still, 'team' => $team]);
    }
}
