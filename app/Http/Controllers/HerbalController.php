<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Herbal;
use Illuminate\Http\Request;

class HerbalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $herbals =  Herbal::with(['hrb_properties'])->get();
        // $herbals = Herbal::all();
        return Inertia::render('Herbal/Index', ['herbals' => $herbals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Herbal/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'latin_name' => 'required'
        ]);

        $herbal = new Herbal();

        $herbal->name = $request->name;

        $herbal->latin_name = $request->latin_name;

        $herbal->save();

        return $this->index();

    }

    /**
     * Display the specified resource.
     */
    public function show(Herbal $herbal)
    {

        $herbal->load(['hrb_properties']);
        return Inertia::render('Herbal/Show', ['herbal' => $herbal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Herbal $herbal)
    {
        return Inertia::render('Herbal/Edit', ['herbal' => $herbal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Herbal $herbal)
    {
        $request->validate([
            'name' => 'required',
            'latin_name' => 'required'

        ]);

        $herbal->name = $request->name;

        $herbal->latin_name = $request->latin_name;

        $herbal->update();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Herbal $herbal)
    {
        $herbal->delete();
        return $this->index()->with('message', 'Herbal deleted successfully');
    }
}
