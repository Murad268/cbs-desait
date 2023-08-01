<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\team\CreateEmployerRequest;
use App\Http\Requests\team\UpdateEmployerRequest;
use App\Models\Positions;
use App\Models\Team;
use App\Services\İmageService;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
class TeamController extends Controller
{
    public function index() {
        $team = Team::all();
        return view('admin.team.index', ['team' => $team]);
    }

    public function create() {
        $positions = Positions::all();
        return view('admin.team.team_add', ['positions' => $positions]);
    }
    public function store(CreateEmployerRequest $request) {
        $imageService = app(İmageService::class);
        $result = $imageService->downloadImage($request->employer_avatar, 'assets/front/images/');
        $position_id = $request->position_id;
        $employer_name = $request->employer_name;
        $elems = ["employer_name" => $employer_name, "employer_avatar" => $result, 'position_id' => $position_id];
        try {
            Team::create($elems);
            return redirect()->route('admin.team.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function edit($id) {
        $employer = Team::findOrFail($id);
        $positions = Positions::all();
        return view('admin.team.team_change', ['employer' => $employer, 'positions' => $positions]);
    }

    public function update(UpdateEmployerRequest $request, $id) {
        try {

            $employer = Team::findOrFail($id);
            $randomName = Str::random(10);
            $imagePath = 'assets/front/images/';
            if ($request->hasFile('employer_avatar')) {
                if (file_exists($imagePath . $employer->employer_avatar)) {
                    unlink($imagePath . $employer->employer_avatar);
                }
                $img = $request->employer_avatar;

                $extension = $img->getClientOriginalExtension();

                $lastName = $randomName . "." . $extension;
                $lasPath = $imagePath . $randomName . "." . $extension;
                Image::make($img)->save($lasPath);
            } else {
                $lastName =  $employer->employer_avatar;
            }

            $position_id = $request->position_id;
            $employer_name = $request->employer_name;
            $elems = ["employer_name" => $employer_name, "employer_avatar" => $lastName, 'position_id' => $position_id];
            $employer->update($elems);
            return redirect()->route('admin.team.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }



    }

    public function destroy($id) {
        try {
            $employer = Team::findOrFail($id);
            $employer->delete();
            return redirect()->route('admin.team.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
