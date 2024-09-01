<?php

namespace App\Http\Controllers;

use App\Models\AnneeScolaire;
use App\Models\Classe;
use App\Models\ClasseAnneeScolaire;
use App\Models\Pedagogie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classe = Classe::all();
        $annee_scolaire = AnneeScolaire::all();
        $user = Pedagogie::with('personne')->get();

        $nb_classe = Classe::count();

        return view('pedagogie.classe.index', compact('classe', 'nb_classe', 'annee_scolaire' , 'user'));
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        $id_user = Auth::id();
        $pedagogie = Pedagogie::where('id_personne', $id_user)->first();
        $id_pedagogie = $pedagogie->id;

        $request->validate([
            'nom'=> ['required','unique:'.Classe::class],
        ]);

        Classe::create([
            'nom' => $request->nom,
            'id_pedagogie' => $id_pedagogie
        ]);

        return redirect()->route('classe.index');
    }


    public function storeAdmin(Request $request)
    {
        $request->validate([
            'nom'=> ['required','unique:'.Classe::class],
            'id_pedagogie' => ['required', 'numeric']

        ]);

        Classe::create([
            'nom' => $request->nom,
            'id_pedagogie' => $request->id_pedagogie,
        ]);

        return redirect()->route('classe.index');
    }
    
    public function edit(Classe $classe)
    {
        //
    }

    public function update(Request $request, Classe $classe)
    {
        //
    }

    public function destroy(Classe $classe)
    {
        //
    }
}
