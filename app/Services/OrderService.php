<?php

namespace App\Services;


use App\Services\İmageService;
use App\Services\DataServices;


class OrderService
{
    public function top($id, $model) {

        $countOfBanners = $model::count();
        $banner = $model::findOrFail($id);
        $prevBanner = $model::where('order', $banner->order-1);
        $banners = $model::all();

        if($banner->order <= 1) {
            $banner->update(['order' => $countOfBanners]);
        } else {
            $banner->update(['order' => $banner->order-1]);
        }
        $prevBanner->update(['order' => $banner->order+2]);

        // foreach($banners as $banner) {
        //     if($banner->order <= 1) {
        //         $banner->update(['order' => $countOfBanners]);
        //     } else {
        //         $banner->update(['order' => $banner->order-1]);
        //     }
        // }
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
    }
}
