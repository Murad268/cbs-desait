<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\about\ChangeAboutRequest;
use App\Models\AbaoutUs;
use Illuminate\Http\Request;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class AboutUsController extends Controller
{
    public function index() {
        $about = AbaoutUs::all();
        return view('admin.aboutus.index', ['about' => $about]);
    }

    public function edit($id) {
        $us = AbaoutUs::findOrFail($id);
        return view('admin.aboutus.edit', ['us' => $us]);
    }


    public function update($id, ChangeAboutRequest $request) {
        try {

            $about = AbaoutUs::findOrFail($id);
            $randomName = Str::random(10);
            $imagePath = 'assets/front/images/';
            if ($request->hasFile('about_img')) {
                if (file_exists($imagePath . $about->about_img)) {
                    unlink($imagePath . $about->about_img);
                }
                $img = $request->about_img;

                $extension = $img->getClientOriginalExtension();

                $lastName = $randomName . "." . $extension;
                $lasPath = $imagePath . $randomName . "." . $extension;
                Image::make($img)->save($lasPath);
            } else {
                $lastName =  $about->about_img;
            }

            $about_top = $request->about_top;
            $about_title = $request->about_title;
            $about_text = $request->about_text;
            $elems = ["about_top" => $about_top, "about_img" => $lastName, 'about_title' => $about_title, 'about_text' => $about_text];



            $about->update($elems);


            return redirect()->route('admin.about__us.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
