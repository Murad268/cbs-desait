<?php

namespace App\Services;

use App\Models\Blog;
use App\Services\İmageService;
use App\Services\DataServices;
use App\Services\OrderService;
use Exception;

class BlogsService
{
    public function __construct(private OrderService $orderService, private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/images/', 'card_img', 'notfound.png');
        $result1 = $this->imageService->downloadImage($request, 'assets/front/images/', 'card_banner', 'notfound.png');
        $data = $request->all();
        $data['card_img'] = $result;
        $data['card_banner'] = $result1;

        try {
            $blog = new Blog();
            $this->dataServices->save($blog, $data, 'create');

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($request, $id) {
        try {
            $blog = Blog::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'card_img', $blog->card_img );
            $result1= $this->imageService->updateImage($request, 'assets/front/images/', 'card_banner', $blog->card_banner );
            $data = $request->all();
            $data['card_img'] = $result;
            $data['card_banner'] = $result1;
            $this->dataServices->save($blog, $data, 'update');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the blog');
        }
    }


    public function delete($id) {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();
            $this->imageService->deleteImage('assets/front/images/', $blog->card_img);
            $this->imageService->deleteImage('assets/front/images/', $blog->card_banner);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function top($id) {
        $model = new Blog();

        $this->orderService->top($id, $model);
    }

    public function bottom($id) {
        $model = new Blog();
        $this->orderService->bottom($id, $model);
    }
}
