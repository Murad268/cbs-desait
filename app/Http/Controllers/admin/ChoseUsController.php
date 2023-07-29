<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\comment\CreateCommentRequest;
use App\Http\Requests\comment\UpdateCommentRequest;
use App\Models\ChooseUs_commentsb;
use Illuminate\Http\Request;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
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
        $img = $request->chose_us_img;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->save($lasPath);
        $chose_us_comment = $request->chose_us_comment;
        $chose_us_name = $request->chose_us_name;
        $chose_us_position = $request->chose_us_position;
        $elems = ["chose_us_comment" => $chose_us_comment, "chose_us_img" => $lastName, 'chose_us_name' => $chose_us_name, 'chose_us_position' => $chose_us_position];
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

            $portfolio =    ChooseUs_commentsb::findOrFail($id);
            $randomName = Str::random(10);
            $imagePath = 'assets/front/images/';
            if ($request->hasFile('chose_us_img')) {
                if (file_exists($imagePath . $portfolio->chose_us_img)) {
                    unlink($imagePath . $portfolio->chose_us_img);
                }
                $img = $request->chose_us_img;

                $extension = $img->getClientOriginalExtension();

                $lastName = $randomName . "." . $extension;
                $lasPath = $imagePath . $randomName . "." . $extension;
                Image::make($img)->save($lasPath);
            } else {
                $lastName =  $portfolio->chose_us_img;
            }

            $chose_us_comment = $request->chose_us_comment;
            $chose_us_name = $request->chose_us_name;
            $chose_us_position = $request->chose_us_position;
            $elems = ["chose_us_comment" => $chose_us_comment, "chose_us_img" => $lastName, 'chose_us_name' => $chose_us_name, 'chose_us_position' => $chose_us_position];
            $portfolio->update($elems);
            return redirect()->route('admin.chose_us.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id) {
        try {
            $comment = ChooseUs_commentsb::findOrFail($id);
            $comment->delete();
            return redirect()->route('admin.chose_us.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
