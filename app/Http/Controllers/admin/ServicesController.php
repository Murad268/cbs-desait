<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\services\serviceCreateRequest;
use App\Http\Requests\services\updateServiceRequest;
use App\Models\Services;
use App\Services\DataServices;
use App\Services\İmageService;
use Exception;


class ServicesController extends Controller
{
    public function __construct(private DataServices $dataServices, private İmageService $imageService){}
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
        $result = $this->imageService->downloadImage($request, 'assets/front/icons/', 'services_item_icons', 'notfound.png');
        $data = $request->all();
        $data['services_item_icons'] = $result;
        try {
            $service = new Services;
            $this->dataServices->save($service, $data, 'create');
            return redirect()->route('admin.services.index')->with("message", "the information was added to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
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
        try {
            $service = Services::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/icons/', 'services_item_icons', $request->services_item_icons);
            $data = $request->all();
            $data['services_item_icons'] = $result;
            $this->dataServices->save($service, $data, 'update');;
            return redirect()->route('admin.services.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy(Services $service) {
        try {
            $service->delete();
            return redirect()->route('admin.services.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
