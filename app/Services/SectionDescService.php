<?php

namespace App\Services;

use App\Models\SectionTitles;
use App\Models\Setting;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class SectionDescService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        try {
            $titles = new SectionTitles();
            $this->dataServices->save($titles, $request->all(), 'create');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($request, $id) {
        try {
            $section = SectionTitles::findOrFail($id);
            $this->dataServices->save($section, $request->all(), 'update');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
