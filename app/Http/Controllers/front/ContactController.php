<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $formTexts = ContactForm::firstOrFail();
        $settings = Setting::firstOrFail();
        return view('front.contact', ['formTexts' => $formTexts, 'settings' => $settings]);
    }
}
