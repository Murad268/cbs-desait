<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogs\BlogsCategoryRequest;
use App\Models\BlogCategories;
use Exception;


class BlogsCategoriesController extends Controller
{
    public function index() {
        $categories = BlogCategories::all();
        return view('admin.blogscat.index', ['categories' => $categories]);
    }

    public function create() {
        return view('admin.blogscat.create');
    }

    public function store(BlogsCategoryRequest $request) {
        try {
            BlogCategories::create($request->all());
            return redirect()->route('admin.blogs__categories.index')->with('message', 'the information was added to the database');
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit($id) {
        $category = BlogCategories::findOrFail($id);
        return view('admin.blogscat.edit', ['category' => $category]);
    }

    public function update($id, BlogsCategoryRequest $request) {
        try {
            $categoryFilter = BlogCategories::findOrFail($id);
            $categoryFilter->update($request->all());
            return redirect()->route('admin.blogs__categories.index')->with('message', 'the information has been updated to the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy($id) {
        try {
            BlogCategories::findOrFail($id)->delete();
            return redirect()->route('admin.blogs__categories.index')->with('message', 'the information was deleted from the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
