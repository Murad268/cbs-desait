<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\about\ChangeAboutRequest;
use App\Models\AbaoutUs;
use Exception;
use App\Services\İmageService;
class AboutUsController extends Controller
{
    public function __construct(private İmageService $imageService){}
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
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'about_img',  $request->about_img ,  $about->about_img );
            $about_top = $request->about_top;
            $about_title = $request->about_title;
            $about_text = $request->about_text;
            $elems = ["about_top" => $about_top, "about_img" => $result, 'about_title' => $about_title, 'about_text' => $about_text];
            $about->update($elems);
            return redirect()->route('admin.about__us.index')->with('message', "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
