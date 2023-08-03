<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\header_banner\HeaderBannerStoreRequest;
use App\Http\Requests\header_banner\HeaderBannersUpdateReuqest;
use App\Models\HeaderBanner;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;


class HeaderBannerController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices ){}
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
        $result = $this->imageService->downloadImage($reuqest, 'assets/front/images/', 'banner_img', 'notfound.png');
        $data = $reuqest->all();
        $data['banner_img'] = $result;
        try {
            $banner = new HeaderBanner;
            $this->dataServices->save($banner, $data, 'create');
            return redirect()->route('admin.header__banner.index')->with('message', 'The information was added to the database');
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
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'banner_img', $headerBanner->banner_img );
            $data = $request->all();
            $data['banner_img'] = $result;
            $this->dataServices->save($headerBanner, $data, 'update');
            return redirect()->route('admin.header__banner.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy($id) {
        try {
            $headerBanner = HeaderBanner::findOrFail($id);
            $this->imageService->deleteImage('assets/front/images/', $headerBanner->banner_img );
            $headerBanner->delete();
            return redirect()->route('admin.header__banner.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
