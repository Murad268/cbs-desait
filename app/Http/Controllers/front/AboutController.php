<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AbaoutUs;
use App\Models\SectionTitles;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $about = AbaoutUs::firstOrFail();
        $teamText = SectionTitles::all()[2];
        $team = Team::orderBy('order')->get();
        return view('front.about', ['about' => $about, 'teamText' => $teamText, 'team' => $team]);
    }
}
