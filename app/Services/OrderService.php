<?php

namespace App\Services;



use Kalnoy\Nestedset\NodeTrait;

class OrderService
{
    public function top($id, $model) {
        $countOfBanners = $model::count();
        $banner = $model::findOrFail($id);

        if($banner->order == 1) {
            $prevBanner = $model::where('order', $countOfBanners)->first();
            $banner->update(['order' => $countOfBanners]);
            $prevBanner->update(['order' => 1]);
        } else {
            $prevBanner = $model::where('order', $banner->order-1)->first();
            $banner->update(['order' => $banner->order - 1]);
            $prevBanner->update(['order' => $prevBanner->order + 1]);
        }
    }


    public function bottom($id, $model) {
        $banner = $model::findOrFail($id);
        $countOfBanners = $model::count();
        if($banner->order == strval($countOfBanners)) {
            $nextBanner = $model::where('order', '1')->first();
            $banner->update(['order' => 1]);
            $nextBanner->update(['order' => $countOfBanners]);
        } else {
            $nextBanner = $model::where('order', $banner->order+1)->first();
            $banner->update(['order' => $banner->order + 1]);
            $nextBanner->update(['order' => $nextBanner->order - 1]);
        }
    }
}
