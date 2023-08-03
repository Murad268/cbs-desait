<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        $blogs = Blog::with('category')->get();

        return view('front.blogs', ['blogs' => $blogs]);
    }

    public function blog() {
        return view('front.blog');
    }
}
