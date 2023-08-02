<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        return view('front.blogs');
    }

    public function blog() {
        return view('front.blog');
    }
}
