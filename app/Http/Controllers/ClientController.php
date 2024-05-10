<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with(['gender'])->get();

        return Inertia::render('Client/Index', ['clients' => $clients]);

        dump($clients);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Client/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email'
        ]);

        $client = new Client();
        $client->firstname = $validated['firstname'];
        $client->lastname = $validated['lastname'];
        $client->email = $validated['email'];
        $client->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        
        return Inertia::render('Client/Show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return Inertia::render('Client/Edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email'
        ]);
        $client->firstname = $validated['firstname'];
        $client->lastname = $validated['lastname'];
        $client->email = $validated['email'];

        $client->update();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
         $client->delete();

         return $this->index()->with('message', 'Ce Client a bien été supprimé.');
    }
}
