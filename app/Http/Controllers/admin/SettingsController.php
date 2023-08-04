<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\settings\SettingsRequest;
use App\Models\Setting;
use App\Services\SettingsService;


class SettingsController extends Controller
{
    public function __construct(private SettingsService $settingsService){}
    public function index() {
        $settings = Setting::all();
        return view('admin.settings.index', ['settings' => $settings]);
    }

    public function edit($id) {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', ['setting' => $setting]);
    }

    public function update($id, SettingsRequest $request) {
        $this->settingsService->update($request, $id);
        return redirect()->route('admin.settings.index')->with("message", "the information has been updated to the database");
    }
}
