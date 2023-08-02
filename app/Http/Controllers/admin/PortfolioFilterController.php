<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\portfolio\PortfolioRequest;
use App\Models\PortfolioFilter;
use App\Services\DataServices;
use Exception;


class PortfolioFilterController extends Controller
{
    public function __construct(private DataServices $dataServices){}
    public function index() {
        $portfolioFilter = PortfolioFilter::all();
        return view('admin.portfoliofilter.index', ['portfolioFilter' => $portfolioFilter]);
    }

    public function create() {
        return view('admin.portfoliofilter.portfolio_filter_add');
    }


    public function store(PortfolioRequest $request) {
        try {
            $filter = new PortfolioFilter;
            $this->dataServices->save($filter, $request->all(), 'create');
            return redirect()->route('admin.portfolio__filter.index')->with("message", "the information was added to the database");
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
            $this->dataServices->save($portfolioFilter, $request->all(), 'update');
            return redirect()->route('admin.portfolio__filter.index')->with("message", "the information has been updated to the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id) {
        try {
            $portfolioFilter = PortfolioFilter::findOrFail($id);
            $portfolioFilter->delete();
            return redirect()->route('admin.portfolio__filter.index')->with("message", "the information was deleted from the database");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
