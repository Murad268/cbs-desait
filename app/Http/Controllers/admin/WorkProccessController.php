<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\workproccess\CreateWorkProccessRequest;
use App\Http\Requests\workproccess\UppdateProccessRequest;
use App\Models\WorkProccess;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Console\View\Components\Warn;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
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
        $img = $request->proccess_icon;
        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/icons/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->save($lasPath);
        $proccess_title = $request->proccess_title;
        $proccess_desc = $request->proccess_desc;
        $elems = ["proccess_title" => $proccess_title, "proccess_icon" => $lastName, 'proccess_desc' => $proccess_desc];
        try {
            WorkProccess::create($elems);
            return redirect()->route('admin.work__proccess.index');
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
            $randomName = Str::random(10);
            $imagePath = 'assets/front/icons/';
            if ($request->hasFile('proccess_icon')) {
                if (file_exists($imagePath . $proccess->proccess_icon)) {
                    unlink($imagePath . $proccess->proccess_icon);
                }
                $img = $request->proccess_icon;

                $extension = $img->getClientOriginalExtension();

                $lastName = $randomName . "." . $extension;
                $lasPath = $imagePath . $randomName . "." . $extension;
                Image::make($img)->save($lasPath);
            } else {
                $lastName =  $proccess->proccess_icon;
            }

            $proccess_title = $request->proccess_title;
            $proccess_desc = $request->proccess_desc;
            $elems = ["proccess_desc" => $proccess_desc, "proccess_icon" => $lastName, 'proccess_title' => $proccess_title];



            $proccess->update($elems);


            return redirect()->route('admin.work__proccess.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
