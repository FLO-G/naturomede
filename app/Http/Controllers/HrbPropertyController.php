<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\HrbProperty;
use Illuminate\Http\Request;

class HrbPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        // $hrbProperties = HrbProperty::all();
        // return Inertia::render('HrbProperty/Index', ['hrbProperties' => $hrbProperties]);
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
    public function show(HrbProperty $hrb_Property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HrbProperty $hrb_Property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HrbProperty $hrb_Property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HrbProperty $hrb_Property)
    {
        //
    }
}
