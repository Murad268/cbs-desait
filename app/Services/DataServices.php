<?php

namespace App\Services;
class DataServices
{

    public function save($model, $data, $relation = '', $sync = false) {
        $create = $model->create($data);
        if ($sync) {
            if ($create != false) {
                $create->$relation()->sync($sync); // $sync should be an array of related category IDs
            }
        }
    }
}
