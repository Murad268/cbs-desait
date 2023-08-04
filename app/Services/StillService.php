<?php

namespace App\Services;

use App\Models\Still;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class StillService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}



    public function update($request, $id) {
        try {
            $still = Still::findOrFail($id);
            $this->dataServices->save($still, $request->all(), 'update');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
