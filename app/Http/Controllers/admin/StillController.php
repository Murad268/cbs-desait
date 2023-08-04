<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\still\changeStillRequest;
use App\Models\Still;
use App\Services\StillService;
use Exception;


class StillController extends Controller
{
    public function __construct(private StillService $stillService){}
    public function index() {
        $still = Still::all();
        return view('admin.still.index', ['still' => $still]);
    }

    public function edit($id) {
        $still = Still::findOrFail($id);
        return view('admin.still.still_change', ['still' => $still]);
    }

    public function update(changeStillRequest $request, $id) {
        $this->stillService->update($request, $id);
        return redirect()->route('admin.still.index')->with("message", "the information has been updated to the database");
    }
}
