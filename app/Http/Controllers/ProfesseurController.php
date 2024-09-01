<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use App\Models\Cours;
use App\Models\Secretariat;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $professeur = Professeur::all();
    $cours = Cours::all();
    $nb_professeur = Professeur::count();

    $user = Secretariat::with('personne')->get();
    $prof = Professeur::with('personne')->get();
    // $classe = ClasseAnneeScolaire::with(['anneescolaires','classes'])->get();

    return view('secretariat.professeur.index', compact('professeur', 'nb_professeur' , 'user' , 'cours' , 'prof'));
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
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $id_user = Auth::id();
        $secretariat = Secretariat::where('id_personne', $id_user)->first();
        $id_secretariat = $secretariat->id;

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $personne = new Professeur;
        $personne->id_personne = $user->id;
        $personne->id_secretariat = $id_secretariat;
        $personne->is_professeur = 1;
        $personne->save();

            // Attribuer le rôle à l'utilisateur
        $role_personne = Role::where('name', 'Professeur')->first();
        $user->assignRole($role_personne);

            // Donner les permissions liées au rôle
        $permission_personne = Permission::where('name', 'Demande Modification Planning')->get();
        $user->givePermissionTo($permission_personne);
        $role_personne->givePermissionTo($permission_personne);

        return redirect()->route('professeur.index')->with('success', 'Professeur créé avec succès !');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'id_secretariat' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $personne = new Professeur;
        $personne->id_personne = $user->id;
        $personne->id_secretariat = $request->id_secretariat;
        $personne->is_professeur = 1;
        $personne->save();

            // Attribuer le rôle à l'utilisateur
        $role_personne = Role::where('name', 'Professeur')->first();
        $user->assignRole($role_personne);

            // Donner les permissions liées au rôle
        $permission_personne = Permission::where('name', 'Demande Modification Planning')->get();
        $user->givePermissionTo($permission_personne);
        $role_personne->givePermissionTo($permission_personne);

        return redirect()->route('professeur.index')->with('success', 'Professeur créé avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {
        //
    }
}
