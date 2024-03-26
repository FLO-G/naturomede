<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Nutri;
use Illuminate\Http\Request;

class NutriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nutris = Nutri::all();
        return Inertia::render('Nutri/Index', ['nutris' => $nutris]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Nutri/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $nutri = new Nutri();

        $nutri->name = $validated['name'];

        $nutri->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Nutri $nutri, Request $request)
    {
        dump($request->route('id'));
        return Inertia::render('Nutri/Show', ['nutri' => $nutri]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nutri $nutri)
    {
        
        return Inertia::render('Nutri/Edit', ['nutri' => $nutri]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nutri $nutri)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $nutri->name = $validated['name'];

        $nutri->update();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nutri $nutri)
    {
        $nutri->delete();
        return $this->index()->with('message', 'Nutri deleted successfully');
    }
}
