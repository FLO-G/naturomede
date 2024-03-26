<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $measures = Measure::all();

        return Inertia::render('Measure/Index', ['measures' => $measures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Measure/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $measure = new Measure();

        $measure->name = $validated['name'];

        $measure->description = $validated['description'];

        $measure->save();

        return $this->index();

    }

    /**
     * Display the specified resource.
     */
    public function show(Measure $measure)
    {
        return Inertia::render('Measure/Show', ['measure' => $measure]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measure $measure)
    {
        return Inertia::render('Measure/Edit', ['measure' => $measure]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Measure $measure)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $measure->name = $request->name;

        $measure->description = $request->description;

        $measure ->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measure $measure)
    {
        $measure->delete();

        return $this->index()->with('message', 'Measure delete successfully');
    }
}
