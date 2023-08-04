<?php

namespace App\Services;

use App\Models\BlogCategories;
use App\Models\Team;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class BlogsCategoriesService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        try {
            $blogCategories = new BlogCategories();
            $this->dataServices->save($blogCategories, $request->all(), 'create');
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($request, $id) {
        try {
            $categoryFilter = BlogCategories::findOrFail($id);
            $this->dataServices->save($categoryFilter, $request->all(), 'update');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            BlogCategories::findOrFail($id)->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
