<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\MeasureHd;
use Illuminate\Http\Request;

class MeasureHdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $measuresHd = MeasureHd::all();
        return Inertia::render('MeasureHd/Index', ['measuresHd' => $measuresHd]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return Inertia::render('MeasureHd/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $measureHd = new MeasureHd();

        $measureHd->name = $validated['name'];
        $measureHd->description = $validated['description'];

        $measureHd->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(MeasureHd $measuresHd, Request $request)

    {
        // dump($measureHd);
        // dump($request->route('id'));
        return Inertia::render('MeasureHd/Show', ['measureHd' => $measuresHd]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MeasureHd $measureHd)
    {
        return Inertia::render('MeasureHd/Edit', ['measureHd' => $measureHd]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MeasureHd $measureHd)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $measureHd->name = $request->name;
        $measureHd->description = $request->description;

        $measureHd->update();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MeasureHd $measureHd)
    {
        $measureHd->delete();

        return $this->index()->with('message', 'Measure deleted successfully');
    }
}
