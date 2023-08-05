<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\chose_us_companies\ChoseUsCompaniesRequest;
use App\Models\ChoseUsCompany;
use App\Services\CompaniesService;
use Exception;
class ChoseUsCompaniesController extends Controller
{
    public function __construct(private CompaniesService $companiesService){}
    public function index() {
        $companies = ChoseUsCompany::orderBy('order')->get();
        return view('admin.chose__us__companies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('admin.chose__us__companies.chose__us__companies__add');
    }

    public function store(ChoseUsCompaniesRequest $request) {
        $this->companiesService->create($request);
        return redirect()->route('admin.chose__us__companies.index')->with('message', 'The information was added to the database');
    }


    public function destroy($id) {
        $this->companiesService->delete($id);
        return redirect()->route('admin.chose__us__companies.index')->with('message', 'the information was deleted from the database');
    }
}
