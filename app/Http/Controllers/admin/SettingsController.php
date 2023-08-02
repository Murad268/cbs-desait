<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\settings\SettingsRequest;
use App\Models\Setting;
use Exception;
use App\Services\İmageService;
use App\Services\DataServices;

class SettingsController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}
    public function index() {
        $settings = Setting::all();
        return view('admin.settings.index', ['settings' => $settings]);
    }

    public function edit($id) {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', ['setting' => $setting]);
    }

    public function update($id, SettingsRequest $request) {
        try {
            $setting = Setting::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/icons/', 'logo',  $setting->logo);
            $data =  $request->all();
            $data['logo'] = $result;
            $this->dataServices->save($setting, $data, 'update');
            return redirect()->route('admin.settings.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
