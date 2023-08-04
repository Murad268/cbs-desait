
<?php

namespace App\Services;

use App\Models\ContactForm;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class FormTitlesService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}



    public function update($request, $id) {
        try {
            $form = ContactForm::findOrFail($id);
            $this->dataServices->save($form, $request->all(), 'update');;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
