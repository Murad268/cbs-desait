<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\portfolio\PortfolioRequest;
use App\Models\PortfolioFilter;
use App\Services\DataServices;
use App\Services\PortfolioFilterService;
use Exception;


class PortfolioFilterController extends Controller
{
    public function __construct(private PortfolioFilterService $portfolioFilterService){}
    public function index() {
        $portfolioFilter = PortfolioFilter::all();
        return view('admin.portfoliofilter.index', ['portfolioFilter' => $portfolioFilter]);
    }

    public function create() {
        return view('admin.portfoliofilter.portfolio_filter_add');
    }


    public function store(PortfolioRequest $request) {
        $this->portfolioFilterService->create($request);
        return redirect()->route('admin.portfolio__filter.index')->with("message", "the information was added to the database");
    }

    public function edit($id) {
        $portfolioFilter = PortfolioFilter::findOrFail($id);
        return view('admin.portfoliofilter.portfolio_filter_change', ['portfolioFilter' => $portfolioFilter]);
    }

    public function update(PortfolioRequest $request, $id) {
        $this->portfolioFilterService->update($request, $id);
        return redirect()->route('admin.portfolio__filter.index')->with("message", "the information has been updated to the database");
    }

    public function destroy($id) {
        $this->portfolioFilterService->delete($id);
        return redirect()->route('admin.portfolio__filter.index')->with("message", "the information was deleted from the database");
    }
}
