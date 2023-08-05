<?php

namespace App\Services;
use App\Models\Services;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class ServicesService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {

        $result = $this->imageService->downloadImage($request, 'assets/front/icons/', 'services_item_icons', 'notfound.png');
        $result1 = $this->imageService->downloadImage($request, 'assets/front/images/', 'banner_image', 'notfound.png');
        $data = $request->all();
        $data['services_item_icons'] = $result;
        $data['banner_image'] = $result1;

        try {
            $service = new Services();
            $this->dataServices->save($service, $data, 'create');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function update($request, $id) {
        try {
            $service = Services::findOrFail($id);

            $result = $this->imageService->updateImage($request, 'assets/front/icons/', 'services_item_icons', $service->services_item_icons);
            $result1 = $this->imageService->updateImage($request, 'assets/front/images/', 'banner_image', $service->banner_image);
            $data = $request->all();
            $data['services_item_icons'] = $result;
            $data['banner_image'] = $result1;
            $this->dataServices->save($service, $data, 'update');;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            $service = Services::findOrFail($id);
            $service->delete();

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
