<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\comment\CreateCommentRequest;
use App\Http\Requests\comment\UpdateCommentRequest;
use App\Models\ChooseUs_commentsb;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;
class ChoseUsController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}
    public function index() {
        $comments = ChooseUs_commentsb::all();
        return view('admin.choseus.index', ['comments' => $comments]);
    }

    public function create()
    {
        return view('admin.choseus.chose_us_add');
    }

    public function store(CreateCommentRequest $request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/images/', 'chose_us_img', 'notfound.png');
        $data = $request->all();
        $data['chose_us_img'] = $result;
        try {
            $ch = new ChooseUs_commentsb;
            $this->dataServices->save($ch, $data, 'create');
            return redirect()->route('admin.chose_us.index')->with('message', 'The information was added to the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
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
        try {
            $portfolio = ChooseUs_commentsb::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'chose_us_img', $portfolio->chose_us_img );
            $data = $request->all();
            $data['chose_us_img'] = $result;
            $this->dataServices->save($portfolio, $data, 'update');
            return redirect()->route('admin.chose_us.index')->with('message', 'the information has been updated to the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id) {
        try {
            $comment = ChooseUs_commentsb::findOrFail($id);
            $this->imageService->deleteImage('assets/front/images/', $comment->chose_us_img);
            $comment->delete();
            return redirect()->route('admin.chose_us.index')->with('message', 'the information was deleted from the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
