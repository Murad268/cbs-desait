<?php

namespace App\Services;

use App\Models\Positions;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class PositionService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        try {
            $positions = new Positions();
            $this->dataServices->save($positions, $request->all(), 'create');
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }




    public function delete($id) {
        try {
            $position = Positions::findOrFail($id);
            $position->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
