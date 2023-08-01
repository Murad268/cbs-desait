<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\comment\CreateCommentRequest;
use App\Http\Requests\comment\UpdateCommentRequest;
use App\Models\ChooseUs_commentsb;
use App\Services\İmageService;
use Exception;
class ChoseUsController extends Controller
{
    public function index() {
        $comments = ChooseUs_commentsb::all();
        return view('admin.choseus.index', ['comments' => $comments]);
    }

    public function create()
    {
        return view('admin.choseus.chose_us_add');
    }

    public function store(CreateCommentRequest $request) {
        $imageService = app(İmageService::class);
        $result = $imageService->downloadImage($request->chose_us_img, 'assets/front/images/');

        $chose_us_comment = $request->chose_us_comment;
        $chose_us_name = $request->chose_us_name;
        $chose_us_position = $request->chose_us_position;
        $elems = ["chose_us_comment" => $chose_us_comment, "chose_us_img" => $result, 'chose_us_name' => $chose_us_name, 'chose_us_position' => $chose_us_position];
        try {
            ChooseUs_commentsb::create($elems);
            return redirect()->route('admin.chose_us.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function edit($id)
    {
        $choseUs = ChooseUs_commentsb::findOrFail($id);

        try {
            return view('admin.choseus.choseus_change', ['comment' => $choseUs]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($id, UpdateCommentRequest $request) {
        try {
            $portfolio = ChooseUs_commentsb::findOrFail($id);
            $imageService = app(İmageService::class);
            $result = $imageService->updateImage($request, 'assets/front/images/', 'chose_us_img',  $request->chose_us_img ,  $portfolio->chose_us_img );
            $chose_us_comment = $request->chose_us_comment;
            $chose_us_name = $request->chose_us_name;
            $chose_us_position = $request->chose_us_position;
            $elems = ["chose_us_comment" => $chose_us_comment, "chose_us_img" => $result, 'chose_us_name' => $chose_us_name, 'chose_us_position' => $chose_us_position];
            $portfolio->update($elems);
            return redirect()->route('admin.chose_us.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id) {
        try {
            $comment = ChooseUs_commentsb::findOrFail($id);
            $imageService = app(İmageService::class);
            $imageService->deleteImage('assets/front/images/', $comment->chose_us_img);
            $comment->delete();
            return redirect()->route('admin.chose_us.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
