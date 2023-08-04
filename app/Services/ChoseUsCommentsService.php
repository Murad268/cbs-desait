<?php

namespace App\Services;

use App\Models\ChooseUs_commentsb;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class ChoseUsCommentsService
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}

    public function create($request) {
        $result = $this->imageService->downloadImage($request, 'assets/front/images/', 'chose_us_img', 'notfound.png');
        $data = $request->all();
        $data['chose_us_img'] = $result;
        try {
            $ch = new ChooseUs_commentsb();
            $this->dataServices->save($ch, $data, 'create');
            return redirect()->route('admin.chose_us.index')->with('message', 'The information was added to the database');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function update($request, $id) {
        try {
            $portfolio = ChooseUs_commentsb::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'chose_us_img', $portfolio->chose_us_img );
            $data = $request->all();
            $data['chose_us_img'] = $result;
            $this->dataServices->save($portfolio, $data, 'update');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id) {
        try {
            $comment = ChooseUs_commentsb::findOrFail($id);
            $this->imageService->deleteImage('assets/front/images/', $comment->chose_us_img);
            $comment->delete();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
