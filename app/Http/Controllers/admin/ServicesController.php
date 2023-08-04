<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\services\serviceCreateRequest;
use App\Http\Requests\services\updateServiceRequest;
use App\Models\Services;
use App\Services\ServicesService;
use Exception;


class ServicesController extends Controller
{
    public function __construct(private ServicesService $servicesService){}
    public function index() {
        try {
            $services = Services::where('service_id', '=', 0)->get();
            return view('admin.services.index', ['services' => $services]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function create() {
        try {
            $services = Services::where('service_id', '=', 0)->get();;
            return view('admin.services.service_add', ['services' => $services]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function store(serviceCreateRequest $request) {
        $this->servicesService->create($request);
        return redirect()->route('admin.services.index')->with("message", "the information was added to the database");
    }
    public function edit(Services $service) {
        try {
            $services= Services::where('service_id', '=', 0)->get();;
            return view('admin.services.service_change', ["service" => $service, 'services' => $services]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function update(updateServiceRequest $request, $id) {
        $this->servicesService->update($request, $id);
        return redirect()->route('admin.services.index')->with("message", "the information has been updated to the database");
    }


    public function destroy($id) {
        $this->servicesService->delete($id);
        return redirect()->route('admin.services.index')->with("message", "the information was deleted from the database");
    }
}
