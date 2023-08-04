<?php

namespace App\Http\Controllers;

use App\Http\Requests\descriptions\SectionDesqriptionsRequest;
use App\Models\SectionTitles;
use Illuminate\Http\Request;
use App\Services\DataServices;
use App\Services\SectionDescService;

class SectionTitlesController extends Controller
{
    public function __construct(private SectionDescService $sectionDescService){}
    public function index() {
        return view('admin.sectiontitles.index', ['descriptions' => SectionTitles::all()]);
    }

    public function create() {
        return view('admin.sectiontitles.create');
    }

    public function store(SectionDesqriptionsRequest $request) {
        $this->sectionDescService->create($request);
        return redirect()->route('admin.section__titles.index')->with("message", "The information was added to the database");
    }


    public function edit($id) {
        try {
            return view('admin.sectiontitles.edit', ['desc' => SectionTitles::findOrFail($id)]);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }


    public function update(SectionDesqriptionsRequest $request, $id) {
        $this->sectionDescService->update($request, $id);
        return redirect()->route('admin.section__titles.index')->with("message", "the information has been updated to the database");
    }
}
