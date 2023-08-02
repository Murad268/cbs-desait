<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\team\CreateEmployerRequest;
use App\Http\Requests\team\UpdateEmployerRequest;
use App\Models\Positions;
use App\Models\Team;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class TeamController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}
    public function index() {
        $team = Team::all();
        return view('admin.team.index', ['team' => $team]);
    }

    public function create() {
        $positions = Positions::all();
        return view('admin.team.team_add', ['positions' => $positions]);
    }
    public function store(CreateEmployerRequest $request) {
        $result = $this->imageService->downloadImage($request->employer_avatar, 'assets/front/images/');
        $data = $request->all();
        $data['employer_avatar'] = $result;

        try {
            $team = new Team;
            $this->dataServices->save($team, $data);
            return redirect()->route('admin.team.index')->with("message", "the information was added to the database");
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
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'employer_avatar',  $request->employer_avatar ,  $employer->employer_avatar );
            $position_id = $request->position_id;
            $employer_name = $request->employer_name;
            $elems = ["employer_name" => $employer_name, "employer_avatar" => $result, 'position_id' => $position_id];
            $employer->update($elems);
            return redirect()->route('admin.team.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }



    }

    public function destroy($id) {
        try {
            $employer = Team::findOrFail($id);
            $this->imageService->deleteImage('assets/front/images/', $employer->employer_avatar);
            $employer->delete();
            return redirect()->route('admin.team.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
