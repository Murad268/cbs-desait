<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Setting;

class BlogsController extends Controller
{
    public function index() {
        $blogs = Blog::with('category')->orderBy('order')->get();

        return view('front.blogs', ['blogs' => $blogs]);
    }

    public function blog($slug) {
        $blog = Blog::where('slug', $slug)->first();
        $blogs = Blog::where('id', "!=", $blog->id)->orderBy('created_at', 'desc')->paginate(3);
        $settings = Setting::firstOrFail();
        return view('front.blog', ['blog' => $blog, 'settings' => $settings, 'blogs' => $blogs]);
    }
}
