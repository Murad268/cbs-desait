<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogs\CreateBlogRequest;
use App\Http\Requests\blogs\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategories;
use App\Services\BlogsService;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;


class BlogsController extends Controller
{
    public function __construct(private BlogsService $blogsService){}
    public function index()
    {
        $blogs = Blog::with('category')->orderBy('order')->get();

        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        $categories = BlogCategories::all();
        return view('admin.blogs.create', ['categories' => $categories]);
    }

    public function store(CreateBlogRequest $request)
    {
        $this->blogsService->create($request);
        return redirect()->route('admin.blogs.index')->with('message', 'The information was added to the database');
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategories::all();
        return view('admin.blogs.edit', ['blog' => $blog, 'categories' => $categories]);
    }


    public function update(UpdateBlogRequest $request, $id)
    {
        $this->blogsService->update($request, $id);
        return redirect()->route('admin.blogs.index')->with('message', 'the information has been updated to the database');
    }

    public function destroy($id) {
        $this->blogsService->delete($id);
        return redirect()->route('admin.blogs.index')->with('message', 'the information was deleted from the database');
    }



    public function top($id) {
        $this->blogsService->top($id);
        return redirect()->route('admin.blogs.index');
    }


    public function bottom($id) {
        $this->blogsService->bottom($id);
        return redirect()->route('admin.blogs.index');
    }
}
