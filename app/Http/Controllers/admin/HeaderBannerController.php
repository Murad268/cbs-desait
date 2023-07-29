<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\header_banner\HeaderBannerStoreRequest;
use App\Http\Requests\header_banner\HeaderBannersUpdateReuqest;
use App\Models\HeaderBanner;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class HeaderBannerController extends Controller
{
    public function index()
    {
        $headerBannerItems = HeaderBanner::all();
        return view('admin.headerbanner.index', ['headerBannerItems' => $headerBannerItems]);
    }

    public function create()
    {
        return view('admin.headerbanner.header__banner__add');
    }

    public function store(HeaderBannerStoreRequest $reuqest)
    {
        $img = $reuqest->banner_img;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->save($lasPath);
        $banner__title = $reuqest->banner__title;
        $banner_subtitle = $reuqest->banner_subtitle;
        $elems = ["banner__title" => $banner__title, "banner_img" => $lastName, 'banner_subtitle' => $banner_subtitle];
        try {
            HeaderBanner::create($elems);
            return redirect()->route('admin.header__banner.index')->with("message", "verilənlər uğurla yükləndilər");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit($id)
    {
        $headerBanner = HeaderBanner::findOrFail($id);

        try {
            return view('admin.headerbanner.header__banner__change', ['headerBanner' => $headerBanner]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update(HeaderBannersUpdateReuqest $request, $id)
    {
        try {

            $headerBanner = HeaderBanner::findOrFail($id);
            $randomName = Str::random(10);
            $imagePath = 'assets/front/images/';
            if ($request->hasFile('banner_img')) {
                if (file_exists($imagePath . $headerBanner->banner_img)) {
                    unlink($imagePath . $headerBanner->banner_img);
                }
                $img = $request->banner_img;

                $extension = $img->getClientOriginalExtension();

                $lastName = $randomName . "." . $extension;
                $lasPath = $imagePath . $randomName . "." . $extension;
                Image::make($img)->save($lasPath);
            } else {
                $lastName =  $headerBanner->banner_img;
            }

            $banner__title = $request->banner__title;
            $banner_subtitle = $request->banner_subtitle;
            $elems = ["banner__title" => $banner__title, "banner_img" => $lastName, 'banner_subtitle' => $banner_subtitle];



            $headerBanner->update($elems);


            return redirect()->route('admin.header__banner.index')->with("message", "verilənlər uğurla güncəlləndi");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy($id) {
        try {
            $headerBanner = HeaderBanner::findOrFail($id);
            $headerBanner->delete();
            return redirect()->route('admin.header__banner.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
