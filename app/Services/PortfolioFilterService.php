<?php

namespace App\Services;

use App\Models\PortfolioFilter;
use App\Services\İmageService;
use App\Services\DataServices;
use App\Services\OrderService;
use Exception;

class PortfolioFilterService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices, private OrderService $orderService){}

    public function create($request) {
        try {
            $filter = new PortfolioFilter();
            $this->dataServices->save($filter, $request->all(), 'create');
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function update($request, $id) {
        try {
            $portfolioFilter = PortfolioFilter::findOrFail($id);
            $portfolioFilter->update($request->all());
            $this->dataServices->save($portfolioFilter, $request->all(), 'update');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            $portfolioFilter = PortfolioFilter::findOrFail($id);
            $portfolioFilter->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function top($id) {
        $model = new PortfolioFilter();
        $this->orderService->top($id, $model);
    }

    public function bottom($id) {
        $model = new PortfolioFilter();
        $this->orderService->bottom($id, $model);
    }
}
