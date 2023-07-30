<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\chose_us_companies\ChoseUsCompaniesRequest;

use App\Models\ChoseUsCompany;
use Illuminate\Http\Request;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
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
        $img = $request->company_img;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->save($lasPath);

        $elems = ["company_img" => $lastName];
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
