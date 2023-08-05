<?php

namespace App\Services;


use App\Services\İmageService;
use App\Services\DataServices;


class OrderService
{
    public function top($id, $model) {

        $countOfBanners = $model::count();
 
        $banners = $model::all();
        foreach($banners as $banner) {
            if($banner->order <= 1) {
                $banner->update(['order' => $countOfBanners]);
            } else {
                $banner->update(['order' => $banner->order-1]);
            }
        }
        return redirect()->route('admin.header__banner.index');
    }


    public function bottom($id, $model) {
        $countOfBanners = $model::count();
        $banners = $model::all();
        foreach($banners as $banner) {
            if($banner->order >= $countOfBanners) {
                $banner->update(['order' => 1]);
            } else {
                $banner->update(['order' => $banner->order+1]);
            }
        }
        return redirect()->route('admin.header__banner.index');
    }
}
