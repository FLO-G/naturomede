<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class SymptomController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */
    public function index()
    {
        $symptoms = Symptom::all();

        return Inertia::render('Symptom/Index', ['symptoms' => $symptoms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Symptom/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'definition' => 'required',
            'cause' => 'required',
            'complication' => 'required',
        ]);

        $symptom = new Symptom();

        $symptom->name = $request->name;

        $symptom->definition = $request->definition;

        $symptom->cause = $request->cause;

        $symptom->complication = $request->complication;

        $symptom->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Symptom $symptom)
    {
        return Inertia::render('Symptom/Show', ['symptom' => $symptom]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Symptom $symptom)
    {
        return Inertia::render('Symptom/Edit', ['symptom' => $symptom]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Symptom $symptom)
    {
        $request->validate([
            'name' => 'required',
            'definition' => 'required',
            'cause' => 'required',
            'complication' => 'required',
        ]);

        $symptom->name = $request->name;

        $symptom->definition = $request->definition;

        $symptom->cause = $request->cause;

        $symptom->complication = $request->complication;

        $symptom->update();

        return $this->index();   
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Symptom $symptom)
    {
        $symptom->delete();
        return $this->index()->with('message', 'Symptom deleted successfully');    }
}
