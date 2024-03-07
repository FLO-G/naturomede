<?php

namespace App\Http\Controllers;

use App\Models\Aroma;
use Illuminate\Http\Request;

class AromaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Aroma::with(['families' => ['group', 'properties']])->get()->toJson();
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
    public function show(Aroma $aroma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aroma $aroma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aroma $aroma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aroma $aroma)
    {
        //
    }
}
