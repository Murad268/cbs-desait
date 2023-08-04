<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\team\CreateEmployerRequest;
use App\Http\Requests\team\UpdateEmployerRequest;
use App\Models\Positions;
use App\Models\Team;
use App\Services\İmageService;
use App\Services\DataServices;
use App\Services\TeamService;
use Exception;

class TeamController extends Controller
{
    public function __construct(private TeamService $teamService){}
    public function index() {
        $team = Team::all();
        return view('admin.team.index', ['team' => $team]);
    }

    public function create() {
        $positions = Positions::all();
        return view('admin.team.team_add', ['positions' => $positions]);
    }
    public function store(CreateEmployerRequest $request) {
        $this->teamService->create($request);
        return redirect()->route('admin.team.index')->with("message", "the information was added to the database");
    }


    public function edit($id) {
        $employer = Team::findOrFail($id);
        $positions = Positions::all();
        return view('admin.team.team_change', ['employer' => $employer, 'positions' => $positions]);
    }

    public function update(UpdateEmployerRequest $request, $id) {
        $this->teamService->update($request, $id);
        return redirect()->route('admin.team.index')->with("message", "the information has been updated to the database");
    }

    public function destroy($id) {
        $this->teamService->delete($id);
        return redirect()->route('admin.team.index')->with("message", "the information was deleted from the database");
    }
}
