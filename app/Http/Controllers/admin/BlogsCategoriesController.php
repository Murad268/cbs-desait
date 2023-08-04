<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogs\BlogsCategoryRequest;
use App\Models\BlogCategories;
use App\Services\BlogsCategoriesService;
use App\Services\DataServices;
use Exception;


class BlogsCategoriesController extends Controller
{
    public function __construct(private BlogsCategoriesService $blogsCategoriesService){}
    public function index() {
        $categories = BlogCategories::all();
        return view('admin.blogscat.index', ['categories' => $categories]);
    }

    public function create() {
        return view('admin.blogscat.create');
    }

    public function store(BlogsCategoryRequest $request) {
        $this->blogsCategoriesService->create($request);
        return redirect()->route('admin.blogs__categories.index')->with('message', 'the information was added to the database');
    }

    public function edit($id) {
        $category = BlogCategories::findOrFail($id);
        return view('admin.blogscat.edit', ['category' => $category]);
    }

    public function update($id, BlogsCategoryRequest $request) {
        $this->blogsCategoriesService->update($request, $id);
        return redirect()->route('admin.blogs__categories.index')->with('message', 'the information has been updated to the database');
    }


    public function destroy($id) {
        $this->blogsCategoriesService->delete($id);
        return redirect()->route('admin.blogs__categories.index')->with('message', 'the information was deleted from the database');
    }
}
