<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\portfolio\CreatePortfolioItemRequest;
use App\Http\Requests\portfolio\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioFilter;
use App\Models\Services;
use Illuminate\Http\Request;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
class PortfolioController extends Controller
{
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

        $img = $request->portfolio_item_img;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->save($lasPath);
        $portfolio_item_title = $request->portfolio_item_title;
        $about_portfolio_item = $request->about_portfolio_item;

        $elems = ['about_portfolio_item'=> $about_portfolio_item, "portfolio_item_img" => $lastName, 'portfolio_item_title' => $portfolio_item_title];
        try {
            $create = Portfolio::create($elems);
            if($create) {
                $create->services()->sync($request->portfolio__item__category_id);
            }
            return redirect()->route('admin.portfolio.index');
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
            $randomName = Str::random(10);
            $imagePath = 'assets/front/images/';
            if ($request->hasFile('portfolio_item_img')) {
                if (file_exists($imagePath . $portfolio->portfolio_item_img)) {
                    unlink($imagePath . $portfolio->portfolio_item_img);
                }
                $img = $request->portfolio_item_img;

                $extension = $img->getClientOriginalExtension();

                $lastName = $randomName . "." . $extension;
                $lasPath = $imagePath . $randomName . "." . $extension;
                Image::make($img)->save($lasPath);
            } else {
                $lastName =  $portfolio->portfolio_item_img;
            }


            $portfolio_item_title = $request->portfolio_item_title;
            $about_portfolio_item = $request->about_portfolio_item;
            $elems = ['about_portfolio_item' => $about_portfolio_item, "portfolio_item_img" => $lastName, 'portfolio_item_title' => $portfolio_item_title];
            if($portfolio->update($elems)) {
                $portfolio->services()->sync($request->portfolio__item__category_id);
            }

            return redirect()->route('admin.portfolio.index');
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
            return redirect()->route('admin.portfolio.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
