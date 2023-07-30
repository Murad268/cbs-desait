<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\positions\PositionsRequest;
use App\Models\Positions;
use Exception;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index() {
        $positions = Positions::all();
        return view('admin.positions.index', ['positions' => $positions]);
    }

    public function create() {
        return view('admin.positions.position_add');
    }


    public function store(PositionsRequest $request) {
        try {
            Positions::create($request->all());
            return redirect()->route('admin.positions.index');
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id) {
        try {
            $position = Positions::findOrFail($id);
            $position->delete();
            return redirect()->route('admin.positions.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
