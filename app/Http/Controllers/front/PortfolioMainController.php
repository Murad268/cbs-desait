<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioFilter;
use App\Models\SectionTitles;
use Illuminate\Http\Request;

class PortfolioMainController extends Controller
{
    public function index() {
        $description = SectionTitles::all()[1];
        $pFilter = PortfolioFilter::all();
        $portfolio = Portfolio::paginate(10);
        return view('front.portfolio', ['description' => $description, 'pFilter' => $pFilter, 'portfolio' => $portfolio]);
    }
}
