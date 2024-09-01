<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;
use App\Models\Pedagogie;
use Illuminate\Support\Facades\Auth;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salle = Salle::all();

        $nb_salle = Salle::count();

        $user = Pedagogie::with('personne')->get();

        return view('pedagogie.salle.index', compact('salle', 'nb_salle' ,'user'));
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
        $pedagogie = Pedagogie::where('id_personne', $id_user)->first();
        $id_pedagogie = $pedagogie->id;

        $request->validate([
            'nom' => ['required', 'string', 'unique:'.Salle::class],
            'taille' => 'int|required'
        ]);
        
        Salle::create([
            'nom' => $request->nom,
            'taille' => $request->taille,
            'id_pedagogie' => $id_pedagogie
        ]);

        $salle = Salle::all();

        $nb_salle = Salle::count();
        $user = Pedagogie::with('personne')->get();

        return view('pedagogie.salle.index', compact('salle', 'nb_salle' ,'user'));
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'unique:'.Salle::class],
            'taille' => 'int|required',
            'id_pedagogie' => ['required', 'numeric']

        ]);
        
        Salle::create([
            'nom' => $request->nom,
            'taille' => $request->taille,
            'id_pedagogie' => $request->id_pedagogie,
        ]);

        $salle = Salle::all();

        $nb_salle = Salle::count();

        $user = Pedagogie::with('personne')->get();

        return view('pedagogie.salle.index', compact('salle', 'nb_salle' ,'user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Salle $salle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salle $salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salle $salle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salle $salle)
    {
        //
    }
}
