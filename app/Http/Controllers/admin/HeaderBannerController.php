<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\header_banner\HeaderBannerStoreRequest;
use App\Http\Requests\header_banner\HeaderBannersUpdateReuqest;
use App\Models\HeaderBanner;
use App\Services\HeaderBannerService;
use Exception;


class HeaderBannerController extends Controller
{
    public function __construct(private HeaderBannerService $headerBannerService){}
    public function index()
    {
        $headerBannerItems = HeaderBanner::all();
        return view('admin.headerbanner.index', ['headerBannerItems' => $headerBannerItems]);
    }

    public function create()
    {
        return view('admin.headerbanner.header__banner__add');
    }

    public function store(HeaderBannerStoreRequest $request)
    {
        $this->headerBannerService->create($request);
        return redirect()->route('admin.header__banner.index')->with('message', 'The information was added to the database');
    }

    public function edit($id)
    {
        $headerBanner = HeaderBanner::findOrFail($id);
        try {
            return view('admin.headerbanner.header__banner__change', ['headerBanner' => $headerBanner]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update(HeaderBannersUpdateReuqest $request, $id)
    {
        $this->headerBannerService->update($request, $id);
        return redirect()->route('admin.header__banner.index')->with("message", "the information has been updated to the database");
    }


    public function destroy($id) {
        $this->headerBannerService->delete($id);
        return redirect()->route('admin.header__banner.index')->with("message", "the information was deleted from the database");
    }
}
