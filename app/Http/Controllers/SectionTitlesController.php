<?php

namespace App\Http\Controllers;

use App\Http\Requests\descriptions\SectionDesqriptionsRequest;
use App\Models\SectionTitles;
use Illuminate\Http\Request;

class SectionTitlesController extends Controller
{
    public function index() {
        return view('admin.sectiontitles.index', ['descriptions' => SectionTitles::all()]);
    }

    public function create() {
        return view('admin.sectiontitles.create');
    }

    public function store(SectionDesqriptionsRequest $request) {
        try {
            SectionTitles::create($request->all());
            return redirect()->route('admin.section__titles.index')->with("message", "The information was added to the database");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }


    public function edit($id) {
        try {
            return view('admin.sectiontitles.edit', ['desc' => SectionTitles::findOrFail($id)]);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }


    public function update(SectionDesqriptionsRequest $request, $id) {
        try {
            SectionTitles::findOrFail($id)->update($request->all());
            return redirect()->route('admin.section__titles.index')->with("message", "the information has been updated to the database");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
