<?php

namespace App\Services;


use App\Models\Portfolio;
use App\Services\İmageService;
use App\Services\DataServices;
use App\Services\OrderService;
use Exception;

class PortfolioService
{
    public function __construct(private OrderService $orderService, private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/images/', 'portfolio_item_img', 'notfound.png');
        $result1 = $this->imageService->downloadImage($request, 'assets/front/images/', 'banner_img', 'notfound.png');
        $data = $request->all();
        $data['portfolio_item_img'] = $result;
        $data['banner_img'] = $result1;
        unset($data['portfolio__item__category_id'] );

        try {
            $portfolio = new Portfolio();
            $data['order'] = $portfolio->orderByDesc('order')->first()->order+1;
            $this->dataServices->save($portfolio, $data, 'create', 'services', $request->portfolio__item__category_id);
        } catch (Exception $e) {
            $data['order'] = 1;
            $this->dataServices->save($portfolio, $data, 'create', 'services', $request->portfolio__item__category_id);
        }
    }


    public function update($request, $id) {

        try {
            $portfolio = Portfolio::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'portfolio_item_img', $portfolio->portfolio_item_img );
            $result1= $this->imageService->updateImage($request, 'assets/front/images/', 'banner_img', $portfolio->banner_img );
            $data = $request->all();
            $data['portfolio_item_img'] = $result;
            $data['banner_img'] = $result1;






            unset($data['portfolio__item__category_id']);
            $this->dataServices->save($portfolio, $data, 'update', 'services', $request->portfolio__item__category_id);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            $portfolio = Portfolio::findOrFail($id);
            if($portfolio->delete()) {
                $portfolio->services()->sync([]);
            }
            $this->imageService->deleteImage('assets/front/images/', $portfolio->portfolio_item_img);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function top($id) {
        $model = new Portfolio();
        $this->orderService->top($id, $model);
    }

    public function bottom($id) {
        $model = new Portfolio();
        $this->orderService->bottom($id, $model);
    }
}
