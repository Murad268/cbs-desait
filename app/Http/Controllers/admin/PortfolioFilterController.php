<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\portfolio\PortfolioRequest;
use App\Models\PortfolioFilter;
use Exception;


class PortfolioFilterController extends Controller
{
    public function index() {
        $portfolioFilter = PortfolioFilter::all();
        return view('admin.portfoliofilter.index', ['portfolioFilter' => $portfolioFilter]);
    }

    public function create() {
        return view('admin.portfoliofilter.portfolio_filter_add');
    }


    public function store(PortfolioRequest $request) {
        try {
            PortfolioFilter::create($request->all());
            return redirect()->route('admin.portfolio__filter.index');
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit($id) {
        $portfolioFilter = PortfolioFilter::findOrFail($id);
        return view('admin.portfoliofilter.portfolio_filter_change', ['portfolioFilter' => $portfolioFilter]);
    }

    public function update(PortfolioRequest $request, $id) {
        try {
            $portfolioFilter = PortfolioFilter::findOrFail($id);
            $portfolioFilter->update($request->all());
            return redirect()->route('admin.portfolio__filter.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id) {
        try {
            $portfolioFilter = PortfolioFilter::findOrFail($id);
            $portfolioFilter->delete();
            return redirect()->route('admin.portfolio__filter.index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
