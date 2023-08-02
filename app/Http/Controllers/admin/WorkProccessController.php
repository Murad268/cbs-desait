<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\workproccess\CreateWorkProccessRequest;
use App\Http\Requests\workproccess\UppdateProccessRequest;
use App\Models\WorkProccess;
use App\Services\İmageService;
use Exception;

class WorkProccessController extends Controller
{
    public function index() {
        $proccessess = WorkProccess::all();
        return view('admin.workproccess.index', ['proccessess' => $proccessess]);
    }

    public function create() {
        return view('admin.workproccess.workproccess_add');
    }

    public function store(CreateWorkProccessRequest $request) {
        $imageService = app(İmageService::class);
        $result = $imageService->downloadImage($request->proccess_icon, 'assets/front/icons/');

        $proccess_title = $request->proccess_title;
        $proccess_desc = $request->proccess_desc;
        $elems = ["proccess_title" => $proccess_title, "proccess_icon" => $result, 'proccess_desc' => $proccess_desc];
        try {
            WorkProccess::create($elems);
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
            $imageService = app(İmageService::class);
            $result = $imageService->updateImage($request, 'assets/front/icons/', 'proccess_icon',  $request->proccess_icon ,  $proccess->proccess_icon );
            $proccess_title = $request->proccess_title;
            $proccess_desc = $request->proccess_desc;
            $elems = ["proccess_desc" => $proccess_desc, "proccess_icon" => $result, 'proccess_title' => $proccess_title];
            $proccess->update($elems);
            return redirect()->route('admin.work__proccess.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy($id) {
        try {
            $pross = WorkProccess::findOrFail($id);
            $imageService = app(İmageService::class);
            $imageService->deleteImage('assets/front/icons/', $pross->proccess_icon);
            $pross->delete();
            return redirect()->route('admin.work__proccess.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
