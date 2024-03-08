<?php

namespace App\Http\Controllers;

use App\Models\Patho;
use Illuminate\Http\Request;

class PathoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return Patho::with('symptoms', 'systems')->get()->toJson();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Patho $patho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patho $patho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patho $patho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patho $patho)
    {
        //
    }
}
