<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\workproccess\CreateWorkProccessRequest;
use App\Http\Requests\workproccess\UppdateProccessRequest;
use App\Models\WorkProccess;
use App\Services\WorkProccessService;
use Exception;

class WorkProccessController extends Controller
{
    public function __construct(private WorkProccessService $workProccessService){}
    public function index() {
        $proccessess = WorkProccess::orderBy('desc')->get();
        return view('admin.workproccess.index', ['proccessess' => $proccessess]);
    }

    public function create() {
        return view('admin.workproccess.workproccess_add');
    }

    public function store(CreateWorkProccessRequest $request) {
        $this->workProccessService->create($request);
        return redirect()->route('admin.work__proccess.index')->with("message", "the information was added to the database");
    }

    public function edit($id) {
        $proccess = WorkProccess::findOrFail($id);
        return view('admin.workproccess.workproccess_change', ['proccess' => $proccess]);
    }

    public function update(UppdateProccessRequest $request, $id) {
        $this->workProccessService->update($request, $id);
        return redirect()->route('admin.work__proccess.index')->with("message", "the information has been updated to the database");
    }

    public function destroy($id) {
        $this->workProccessService->delete($id);
        return redirect()->route('admin.work__proccess.index')->with("message", "the information was deleted from the database");
    }
}
