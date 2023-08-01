<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\chose_us_companies\ChoseUsCompaniesRequest;
use App\Models\ChoseUsCompany;
use Exception;
use App\Services\İmageService;
class ChoseUsCompaniesController extends Controller
{
    public function index() {
        $companies = ChoseUsCompany::all();
        return view('admin.chose__us__companies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('admin.chose__us__companies.chose__us__companies__add');
    }

    public function store(ChoseUsCompaniesRequest $request) {
        $imageService = app(İmageService::class);
        $result = $imageService->downloadImage($request->company_img, 'assets/front/icons/');
        $elems = ["company_img" => $result];
        try {
            ChoseUsCompany::create($elems);
            return redirect()->route('admin.chose__us__companies.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy($id) {
        try {
            $company = ChoseUsCompany::findOrFail($id);
            $company->delete();
            return redirect()->route('admin.chose__us__companies.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
