<?php

namespace App\Services;


use App\Models\WorkProccess;
use App\Services\İmageService;
use App\Services\DataServices;
use App\Services\OrderService;
use Exception;

class WorkProccessService
{
    public function __construct(private OrderService $orderService, private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/icons/', 'proccess_icon', 'notfound.png');
        $data = $request->all();
        $data['proccess_icon'] = $result;
        try {
            $proccess = new WorkProccess;
            $data['order'] = $proccess->orderByDesc('order')->first()->order+1;
            $this->dataServices->save($proccess, $data, 'create');
        } catch (Exception $e) {
            $data['order'] = 1;
            $this->dataServices->save($proccess, $data, 'create');
        }
    }

    public function update($request, $id) {
        try {
            $proccess = WorkProccess::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/icons/', 'proccess_icon', $proccess->proccess_icon );
            $data = $request->all();
            $data['proccess_icon'] = $result;
            $this->dataServices->save($proccess, $data, 'update');
            return redirect()->route('admin.work__proccess.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            $pross = WorkProccess::findOrFail($id);
            $this->imageService->deleteImage('assets/front/icons/', $pross->proccess_icon);
            $pross->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }



    public function top($id) {
        $model = new WorkProccess();
        $this->orderService->top($id, $model);
    }

    public function bottom($id) {
        $model = new WorkProccess();
        $this->orderService->bottom($id, $model);
    }
}
