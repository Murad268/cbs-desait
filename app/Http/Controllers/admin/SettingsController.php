<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\settings\SettingsRequest;
use App\Models\Setting;
use Exception;
use App\Services\İmageService;

class SettingsController extends Controller
{
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
            $imageService = app(İmageService::class);
            $result = $imageService->updateImage($request, 'assets/front/icons/', 'logo',  $request->logo , $setting->logo );
            $keywords = $request->keywords;
            $site_description = $request->site_description;
            $phone_number = $request->phone_number;
            $email	 = $request->email;
            $wp_link	 = $request->wp_link;
            $insta_link	 = $request->insta_link;
            $fb_link	 = $request->fb_link;
            $linkedin_link	 = $request->linkedin_link;
            $location	 = $request->location;
            $elems = ["email" => $email, "logo" => $result, 'wp_link' => $wp_link, 'insta_link' => $insta_link, 'fb_link' => $fb_link, 'linkedin_link' => $linkedin_link, 'location' => $location, 'keywords' => $keywords, 'site_description' => $site_description, 'phone_number' => $phone_number];
            $setting->update($elems);
            return redirect()->route('admin.settings.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
