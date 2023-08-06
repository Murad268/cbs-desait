<?php

namespace App\Services;

use App\Models\Team;
use App\Services\İmageService;
use App\Services\DataServices;
use App\Services\OrderService;
use Exception;

class TeamService
{
    public function __construct(private OrderService $orderService, private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/images/', 'employer_avatar', 'notfound.png');
        $data = $request->all();
        $data['employer_avatar'] = $result;

        try {
            $team = new Team();
            $data['order'] = $team->orderByDesc('order')->first()->order+1;
            $this->dataServices->save($team, $data, 'create');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($request, $id) {
        try {
            $employer = Team::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'employer_avatar', $employer->employer_avatar );
            $data = $request->all();
            $data['employer_avatar'] = $result;
            $this->dataServices->save($employer, $data, 'update');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            $employer = Team::findOrFail($id);
            $this->imageService->deleteImage('assets/front/images/', $employer->employer_avatar);
            $employer->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function top($id) {
        $model = new Team();
        $this->orderService->top($id, $model);
    }

    public function bottom($id) {
        $model = new Team();
        $this->orderService->bottom($id, $model);
    }
}
