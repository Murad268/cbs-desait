<?php

namespace App\Services;

use App\Models\ChoseUsCompany;
use App\Models\Portfolio;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class CompaniesService
{
    public function __construct(private OrderService $orderService, private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/icons/', 'company_img', 'notfound.png');
        $data = $request->all();
        $data['company_img'] = $result;
        try {
            $company = new ChoseUsCompany();
            $this->dataServices->save($company, $data, 'create');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }





    public function delete($id) {
        try {
            $company = ChoseUsCompany::findOrFail($id);
            $this->imageService->deleteImage('assets/front/icons/', $company->company_img);
            $company->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function top($id) {
        $model = new ChoseUsCompany();
        dd($model);
        $this->orderService->top($id, $model);
    }

    public function bottom($id) {
        $model = new ChoseUsCompany();
        $this->orderService->bottom($id, $model);
    }
}
