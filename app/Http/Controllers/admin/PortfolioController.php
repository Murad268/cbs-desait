<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\portfolio\CreatePortfolioItemRequest;
use App\Http\Requests\portfolio\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioFilter;
use App\Models\Services;
use App\Services\PortfolioService;
use Exception;

class PortfolioController extends Controller
{
    public function __construct(private PortfolioService $portfolio){}
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
        $this->portfolio->create($request);
        return redirect()->route('admin.portfolio.index')->with("message", "The information was added to the database");
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
        $this->portfolio->update($request, $id);
        return redirect()->route('admin.portfolio.index')->with("message", "the information has been updated to the database");
    }


    public function destroy($id) {
        $this->portfolio->delete($id);
        return redirect()->route('admin.portfolio.index')->with("message", "the information was deleted from the database");
    }


    public function get_portfolio($id) {
        if ($id != 0) {
            $datas = Portfolio::where('filter_id', $id)->with('filter')->get();
        } else {
            $datas = Portfolio::with('filter')->get(); // Remove the extra parentheses here
        }

        $jsonData = $datas->toJson();
        return response()->json($jsonData);
    }

}
