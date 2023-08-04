<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\form\ContactFormDataRequest;
use App\Models\ContactForm;
use Exception;
use App\Services\DataServices;
use App\Services\FormTitlesService;

class ContactFormController extends Controller
{
    public function __construct(private FormTitlesService $formTitlesService){}
    public function index() {
        $contact = ContactForm::all();
        return view('admin.contactform.index', ['contact' => $contact]);
    }

    public function edit($id) {
        $form = ContactForm::findOrFail($id);
        return view('admin.contactform.form_change', ['form' => $form]);
    }


    public function update(ContactFormDataRequest $request, $id) {
        $this->formTitlesService->update($request, $id);
        return redirect()->route('admin.contact__form.index')->with('message', 'the information has been updated to the database');
    }
}
