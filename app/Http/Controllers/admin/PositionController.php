<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\positions\PositionsRequest;
use App\Models\Positions;
use App\Services\DataServices;
use Exception;


class PositionController extends Controller
{
    public function __construct(private DataServices $dataServices){}
    public function index() {
        $positions = Positions::all();
        return view('admin.positions.index', ['positions' => $positions]);
    }

    public function create() {
        return view('admin.positions.position_add');
    }


    public function store(PositionsRequest $request) {
        try {
            $positions = new Positions;
            $this->dataServices->save($positions, $request->all());
            return redirect()->route('admin.positions.index')->with("message", "the information was added to the database");
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id) {
        try {
            $position = Positions::findOrFail($id);
            $position->delete();
            return redirect()->route('admin.positions.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
