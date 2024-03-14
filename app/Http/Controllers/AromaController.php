<?php

namespace App\Http\Controllers;

use App\Models\Aroma;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AromaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $aromas = Aroma::with(['families' => ['group', 'properties']])->get();

        return Inertia::render('Aroma/Index', ['aromas' => $aromas]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Aroma/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $aroma = new Aroma();

        $aroma->name = $validated['name'];

        $aroma->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Aroma $aroma)
    {
        $aroma->load(['families' => ['group', 'properties']]);
        return Inertia::render('Aroma/Show', ['aroma' => $aroma]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aroma $aroma)
    {
        return Inertia::render('Aroma/Edit', ['aroma' => $aroma]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aroma $aroma)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $aroma->name = $request->name;

        $aroma ->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aroma $aroma)
    {
        $aroma->delete();

        return $this->index()->with('message', 'Aroma delete successfully');
    }
}
