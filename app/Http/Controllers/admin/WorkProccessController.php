<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\workproccess\CreateWorkProccessRequest;
use App\Http\Requests\workproccess\UppdateProccessRequest;
use App\Models\WorkProccess;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class WorkProccessController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}
    public function index() {
        $proccessess = WorkProccess::all();
        return view('admin.workproccess.index', ['proccessess' => $proccessess]);
    }

    public function create() {
        return view('admin.workproccess.workproccess_add');
    }

    public function store(CreateWorkProccessRequest $request) {
        $result = $this->imageService->downloadImage($request->proccess_icon, 'assets/front/icons/');
        $data = $request->all();
        $data['proccess_icon'] = $result;
        try {
            $proccess = new WorkProccess;
            $this->dataServices->save($proccess, $data, 'create');
            return redirect()->route('admin.work__proccess.index')->with("message", "the information was added to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit($id) {
        $proccess = WorkProccess::findOrFail($id);
        return view('admin.workproccess.workproccess_change', ['proccess' => $proccess]);
    }

    public function update(UppdateProccessRequest $request, $id) {
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


    public function destroy($id) {
        try {
            $pross = WorkProccess::findOrFail($id);
            $this->imageService->deleteImage('assets/front/icons/', $pross->proccess_icon);
            $pross->delete();
            return redirect()->route('admin.work__proccess.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
