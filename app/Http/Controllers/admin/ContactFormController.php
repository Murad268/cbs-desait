<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\form\ContactFormDataRequest;
use App\Models\ContactForm;
use Exception;
use App\Services\DataServices;

class ContactFormController extends Controller
{
    public function __construct(private DataServices $dataServices){}
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
            $form = ContactForm::findOrFail($id);
            $this->dataServices->save($form, $request->all(), 'update');;
            return redirect()->route('admin.contact__form.index')->with('message', 'the information has been updated to the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
