<?php

namespace App\Services;
use App\Models\Setting;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class SettingsService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}

    public function update($request, $id) {
        try {
            $setting = Setting::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/icons/', 'logo',  $setting->logo);
            $data =  $request->all();
            $data['logo'] = $result;
            $this->dataServices->save($setting, $data, 'update');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
