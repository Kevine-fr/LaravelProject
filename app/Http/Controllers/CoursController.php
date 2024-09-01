<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Classe;
use App\Models\Secretariat;
use App\Models\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours = Cours::all();
        $nb_cours = Cours::count();

        $user = Secretariat::with('personne')->get();

        return view('secretariat.cours.index', compact('cours', 'nb_cours' , 'user'));
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
        $id_user = Auth::id();
        $secretariat = Secretariat::where('id_personne', $id_user)->first();
        $id_secretariat = $secretariat->id;

        $request->validate([
            'nom'=> ['required','unique:'.Cours::class],
        ]);

        Cours::create([
            'nom' => $request->nom,
            'id_secretariat' => $id_secretariat,
        ]);

        return redirect()->route('cours.index');
    }
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'nom'=> ['required','unique:'.Cours::class],
            'id_secretariat' => 'required'
        ]);


        Cours::create([
            'nom' => $request->nom,
            'id_secretariat' => $request->id_secretariat,
        ]);

        return redirect()->route('cours.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cours $cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cours $cours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cours $cours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cours $cours)
    {
        //
    }
}
