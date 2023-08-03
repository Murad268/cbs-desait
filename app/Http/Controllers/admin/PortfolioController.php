<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\portfolio\CreatePortfolioItemRequest;
use App\Http\Requests\portfolio\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioFilter;
use App\Models\Services;
use App\Services\İmageService;
use App\Services\DataServices;
use Exception;

class PortfolioController extends Controller
{
    public function __construct(private İmageService $imageService, private DataServices $dataServices){}
    public function index() {
        $portfolio = Portfolio::paginate(10);
        return view('admin.portfolio.index', ['portfolio' => $portfolio]);
    }

    public function create()
    {
        $services = Services::where('service_id', '=', 0)->get();
        $filter = PortfolioFilter::all();
        return view('admin.portfolio.portfolio_add', ['filter' => $filter, 'services' => $services]);
    }

    public function store(CreatePortfolioItemRequest $request) {
        $result = $this->imageService->downloadImage($request->portfolio_item_img, 'assets/front/images/');
        $data = $request->all();
        $data['portfolio_item_img'] = $result;
        unset($data['portfolio__item__category_id'] );
        try {
            $portfolio = new Portfolio;
            $this->dataServices->save($portfolio, $data, 'create', 'services', $request->portfolio__item__category_id);
            return redirect()->route('admin.portfolio.index')->with("message", "The information was added to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function edit($id)
    {
        try {
            $services = Services::where('service_id', '=', 0)->get();
            $portfolioItem = Portfolio::findOrFail($id);
            $filter = PortfolioFilter::all();
            return view('admin.portfolio.portfolio_change', ['portfolioItem' => $portfolioItem, 'filter' => $filter, 'services' => $services]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function update($id, UpdatePortfolioRequest $request) {
        try {
            $portfolio = Portfolio::findOrFail($id);
            $result = $this->imageService->updateImage($request, 'assets/front/images/', 'portfolio_item_img', $portfolio->portfolio_item_img);
            $data = $request->all();
            $data['portfolio_item_img'] = $result;
            unset($data['portfolio__item__category_id']);
            $this->dataServices->save($portfolio, $data, 'update', 'services', $request->portfolio__item__category_id);

            return redirect()->route('admin.portfolio.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function destroy($id) {
        try {
            $portfolio = Portfolio::findOrFail($id);
            if($portfolio->delete()) {
                $portfolio->services()->sync([]);
            }
            $this->imageService->deleteImage('assets/front/images/', $portfolio->portfolio_item_img);
            return redirect()->route('admin.portfolio.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
