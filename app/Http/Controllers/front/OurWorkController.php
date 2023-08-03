<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\WorkProccess;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function index($id) {
        $work = Portfolio::findOrFail($id);
        $team = Team::all();
        return view('front.our_work', ['work' => $work, 'team' => $team]);
    }
}
