<?php

namespace App\Services;
class DataServices
{

    public function save($model, $data, $proccess = 'create', $relation = '', $sync = false) {

        if($proccess == 'create') {

            $create = $model->create($data);

            if ($sync) {
                if ($create != false) {
                    $create->$relation()->sync($sync);
                }
            }
        } else {
            $update = $model->update($data);

            if ($sync) {
                if ($update != false) {
                    $model->$relation()->sync($sync);
                }
            }
        }
    }
}
