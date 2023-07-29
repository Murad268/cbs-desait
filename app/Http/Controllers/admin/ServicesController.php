<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\services\serviceCreateRequest;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
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
        try {
            Services::create($request->all());
            return redirect()->route('admin.services.index');
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

    public function update(serviceCreateRequest $request, Services $service) {
        try {
            $service->update($request->all());
            return redirect()->route('admin.services.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy(Services $service) {
        try {
            $service->delete();
            return redirect()->route('admin.services.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
