<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\chose_us_companies\ChoseUsCompaniesRequest;
use App\Models\ChoseUsCompany;
use Exception;
use App\Services\İmageService;
use App\Services\DataServices;
class ChoseUsCompaniesController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}
    public function index() {
        $companies = ChoseUsCompany::all();
        return view('admin.chose__us__companies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('admin.chose__us__companies.chose__us__companies__add');
    }

    public function store(ChoseUsCompaniesRequest $request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/icons/', 'company_img', 'notfound.png');
        $data = $request->all();
        $data['company_img'] = $result;
        try {
            $company = new ChoseUsCompany;
            $this->dataServices->save($company, $data, 'create');
            return redirect()->route('admin.chose__us__companies.index')->with('message', 'The information was added to the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy($id) {
        try {
            $company = ChoseUsCompany::findOrFail($id);
            $this->imageService->deleteImage('assets/front/icons/', $company->company_img);
            $company->delete();
            return redirect()->route('admin.chose__us__companies.index')->with('message', 'the information was deleted from the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
