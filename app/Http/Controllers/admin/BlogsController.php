<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogs\CreateBlogRequest;
use App\Http\Requests\blogs\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategories;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;


class BlogsController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        $categories = BlogCategories::all();
        return view('admin.blogs.create', ['categories' => $categories]);
    }

    public function store(CreateBlogRequest $request)
    {

        $result = $this->imageService->downloadImage($request->card_img, 'assets/front/images/');
        $result1 = $this->imageService->downloadImage($request->card_banner, 'assets/front/images/');
        $data = $request->all();
        $data['card_img'] = $result;
        $data['card_banner'] = $result1;
        try {
            $blog = new Blog;
            $this->dataServices->save($blog, $data);
            return redirect()->route('admin.blogs.index')->with('message', 'The information was added to the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategories::all();
        return view('admin.blogs.edit', ['blog' => $blog, 'categories' => $categories]);
    }


    public function update(UpdateBlogRequest $request, $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'card_img',  $request->card_img , $blog->card_img );
            $result1= $this->imageService->updateImage($request, 'assets/front/images/', 'card_banner',  $request->card_banner , $blog->card_banner );
            $category_id = $request->category_id;
            $blog_title = $request->blog_title;
            $blog_content = $request->blog_content;
            $elems = ["category_id" => $category_id, "card_img" => $result, 'blog_title' => $blog_title, 'blog_content' => $blog_content, 'card_banner' => $result1];
            $blog->update($elems);
            return redirect()->route('admin.blogs.index')->with('message', 'the information has been updated to the database');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the blog');
        }
    }

    public function destroy($id) {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();
            $this->imageService->deleteImage('assets/front/images/', $blog->card_img);
            $this->imageService->deleteImage('assets/front/images/', $blog->card_banner);
            return redirect()->route('admin.blogs.index')->with('message', 'the information was deleted from the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
