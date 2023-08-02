<?php

namespace App\Http\Controllers;

use App\Http\Requests\descriptions\SectionDesqriptionsRequest;
use App\Models\SectionTitles;
use Illuminate\Http\Request;
use App\Services\DataServices;
class SectionTitlesController extends Controller
{
    public function __construct(private DataServices $dataServices){}
    public function index() {
        return view('admin.sectiontitles.index', ['descriptions' => SectionTitles::all()]);
    }

    public function create() {
        return view('admin.sectiontitles.create');
    }

    public function store(SectionDesqriptionsRequest $request) {
        try {
            $titles = new SectionTitles;
            $this->dataServices->save($titles, $request->all(), 'create');
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
            $section = SectionTitles::findOrFail($id);
            $this->dataServices->save($section, $request->all(), 'update');
            return redirect()->route('admin.section__titles.index')->with("message", "the information has been updated to the database");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
