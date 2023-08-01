<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\form\ContactFormDataRequest;
use App\Models\ContactForm;
use Exception;


class ContactFormController extends Controller
{
    public function index() {
        $contact = ContactForm::all();
        return view('admin.contactform.index', ['contact' => $contact]);
    }

    public function edit($id) {
        $form = ContactForm::findOrFail($id);
        return view('admin.contactform.form_change', ['form' => $form]);
    }


    public function update(ContactFormDataRequest $request, $id) {
        try {
            ContactForm::findOrFail($id)->update($request->all());
            return redirect()->route('admin.contact__form.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
