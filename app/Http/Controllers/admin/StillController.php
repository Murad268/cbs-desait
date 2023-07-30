<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\still\changeStillRequest;
use App\Models\Still;
use Exception;
use Illuminate\Http\Request;

class StillController extends Controller
{
    public function index() {
        $still = Still::all();
        return view('admin.still.index', ['still' => $still]);
    }

    public function edit($id) {
        $still = Still::findOrFail($id);
        return view('admin.still.still_change', ['still' => $still]);
    }

    public function update(changeStillRequest $request, $id) {
        try {
            Still::findOrFail($id)->update($request->all());
            return redirect()->route('admin.still.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
