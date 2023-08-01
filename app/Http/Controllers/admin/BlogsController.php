<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogs\CreateBlogRequest;
use App\Http\Requests\blogs\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategories;
use App\Services\İmageService;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
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
        $imageService = app(İmageService::class);

        $result = $imageService->downloadImage($request->card_img, 'assets/front/images/');
        $result1 = $imageService->downloadImage($request->card_banner, 'assets/front/images/');






        $category_id = $request->category_id;
        $blog_title = $request->blog_title;
        $blog_content = $request->blog_content;
        $elems = ["category_id" => $category_id, "card_img" => $result, 'blog_title' => $blog_title, 'blog_content' => $blog_content, 'card_banner' => $result1];

        try {
            Blog::create($elems);
            return redirect()->route('admin.blogs.index');
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



        // Find the blog record
        try {
            $blog = Blog::findOrFail($id);

            $blog->category_id = $request->category_id;
            $blog->blog_title = $request->blog_title;
            $blog->blog_content = $request->blog_content;


            if ($request->hasFile('card_img')) {
                // Delete old image if exists
                $this->deleteImage($blog->card_img);

                // Save new image
                $blog->card_img = $this->saveImage($request->file('card_img'));
            } else {
                $blog->card_img = $blog->card_img;
            }

            if ($request->hasFile('card_banner')) {

                $this->deleteImage($blog->card_banner);


                $blog->card_banner = $this->saveImage($request->file('card_banner'));
            } else {
                $blog->card_banner = $blog->card_banner;
            }

            $blog->save();

            return redirect()->route('admin.blogs.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the blog');
        }
    }

    private function saveImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/';
        $lastName = $randomName . "." . $extension;
        $image->move($imagePath, $lastName);

        return $imagePath . $lastName;
    }

    private function deleteImage($imagePath)
    {
        if (File::exists(public_path($imagePath))) {
            File::delete(public_path($imagePath));
        }
    }



    public function destroy($id) {
        try {
            Blog::findOrFail($id)->delete();
            return redirect()->route('admin.blogs.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
