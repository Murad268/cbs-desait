<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\comment\CreateCommentRequest;
use App\Http\Requests\comment\UpdateCommentRequest;
use App\Models\ChooseUs_commentsb;
use App\Services\ChoseUsCommentsService;
use Exception;
class ChoseUsController extends Controller
{
    public function __construct(private ChoseUsCommentsService $choseUsCommentsService){}
    public function index() {
        $comments = ChooseUs_commentsb::all();
        return view('admin.choseus.index', ['comments' => $comments]);
    }

    public function create()
    {
        return view('admin.choseus.chose_us_add');
    }

    public function store(CreateCommentRequest $request) {
        $this->choseUsCommentsService->create($request);
        return redirect()->route('admin.chose_us.index')->with('message', 'The information was added to the database');
    }


    public function edit($id)
    {
        $choseUs = ChooseUs_commentsb::findOrFail($id);

        try {
            return view('admin.choseus.choseus_change', ['comment' => $choseUs]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($id, UpdateCommentRequest $request) {
        $this->choseUsCommentsService->update($request, $id);
        return redirect()->route('admin.chose_us.index')->with('message', 'the information has been updated to the database');
    }

    public function destroy($id) {
        $this->choseUsCommentsService->delete($id);
        return redirect()->route('admin.chose_us.index')->with('message', 'the information was deleted from the database');
    }
}
