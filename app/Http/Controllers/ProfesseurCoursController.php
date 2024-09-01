<?php

namespace App\Http\Controllers;

use App\Models\ProfesseurCours;
use Illuminate\Http\Request;

class ProfesseurCoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'id_cours' => ['required'],
            'id_professeur' => ['required'],
        ]);
    
        // Vérifiez si une ligne avec les mêmes valeurs d'ID de classe et d'année scolaire existe déjà
        $existingRow = ProfesseurCours::where('id_cours', $request->input('id_cours'))
            ->where('id_professeur', $request->input('id_professeur'))
            ->first();
    
        if ($existingRow) {
            // Affichez un message d'erreur (vous pouvez personnaliser le message)
            return redirect()->back()->with('error', 'Cette combinaison classe-année existe déjà.');
        }
    
        // Si la ligne n'existe pas, ajoutez-la
        ProfesseurCours::create([
            'id_cours' => $request->input('id_cours'),
            'id_professeur' => $request->input('id_professeur'),
        ]);
    
        return redirect()->route('professeur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfesseurCours $professeurCours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfesseurCours $professeurCours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfesseurCours $professeurCours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfesseurCours $professeurCours)
    {
        //
    }
}
