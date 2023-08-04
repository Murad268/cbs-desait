<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\positions\PositionsRequest;
use App\Models\Positions;
use App\Services\PositionService;



class PositionController extends Controller
{
    public function __construct(private PositionService $positionService){}
    public function index() {
        $positions = Positions::all();
        return view('admin.positions.index', ['positions' => $positions]);
    }

    public function create() {
        return view('admin.positions.position_add');
    }


    public function store(PositionsRequest $request) {
        $this->positionService->create($request);
        return redirect()->route('admin.positions.index')->with("message", "the information was added to the database");
    }

    public function destroy($id) {
        $this->positionService->delete($id);
        return redirect()->route('admin.positions.index')->with("message", "the information was deleted from the database");
    }

}
