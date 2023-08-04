<?php

namespace App\Services;

use App\Models\HeaderBanner;
use App\Models\Services;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class HeaderBannerService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/images/', 'banner_img', 'notfound.png');
        $data = $request->all();
        $data['banner_img'] = $result;
        try {
            $banner = new HeaderBanner();
            $this->dataServices->save($banner, $data, 'create');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function update($request, $id) {
        try {
            $headerBanner = HeaderBanner::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'banner_img', $headerBanner->banner_img );
            $data = $request->all();
            $data['banner_img'] = $result;
            $this->dataServices->save($headerBanner, $data, 'update');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            $headerBanner = HeaderBanner::findOrFail($id);
            $this->imageService->deleteImage('assets/front/images/', $headerBanner->banner_img );
            $headerBanner->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
