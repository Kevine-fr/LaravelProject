<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use App\Models\AnneeScolaire;
use Illuminate\Http\Request;

class HourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hour = Hour::all();
        $nb_hour = Hour::count();
        // $anneescolaire = AnneeScolaire::findOrFail($id);

        return view('secretariat.hour.index', compact('hour' , 'nb_hour' ));
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
        $request->validate([
            'heure_de_debut' => ['required'],
            'heure_de_fin' => ['required']
        ]);

        Hour::create([
            'heure_de_debut' => $request->heure_de_debut,
            'heure_de_fin' => $request->heure_de_fin,
        ]);

        return redirect()->route('hour.index')->with('succes' , 'Heure crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hour $hour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hour $hour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hour $hour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hour $hour)
    {
        //
    }
}
