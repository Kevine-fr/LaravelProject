<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Pedagogie;
use App\Models\Classe;
use Illuminate\Support\Facades\Auth;
use App\Models\ClasseAnneeScolaire;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $etudiant = Etudiant::all();
    $nb_etudiant = Etudiant::count();

    $user = Pedagogie::with('personne')->get();
    $classe = ClasseAnneeScolaire::with(['anneescolaires','classes'])->get();

    return view('pedagogie.etudiant.index', compact('etudiant', 'nb_etudiant' , 'user' , 'classe'));
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
            'name' => 'required',
            'first_name' => 'required',
            'date_de_naissance' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'id_cas' => 'required',
        ]);
    
        // Création d'une nouvelle instance d'Etudiant avec les données du formulaire
        
        $user = new User();
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Assurez-vous de hasher le mot de passe
        $user->save();

        $etudiant = new Etudiant;
        $etudiant->date_de_naissance = $request->date_de_naissance;
        $etudiant->id_personne = $user->id;
        $etudiant->id_pedagogie = $id_pedagogie;
        $etudiant->id_cas = $request->id_cas;
        $etudiant->save();

        $role_etudiant = Role::where('name', 'Etudiant')->first();
        $user->assignRole($role_etudiant);

        // $permission_etudiant = Permission::whereIn('name' , [])->get();
        // $user->givePermissionTo($permission_etudiant);

        // $role_etudiant->givePermissionTo($permission_etudiant);
    
        // Redirection vers une autre page ou affichage d'un message de succès
        return redirect()->route('etudiant.index')->with('success', 'Étudiant créé avec succès !');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'date_de_naissance' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'id_pedagogie' => 'required',
            'id_cas' => 'required',
        ]);
    
        // Création d'une nouvelle instance d'Etudiant avec les données du formulaire
        
        $user = new User();
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Assurez-vous de hasher le mot de passe
        $user->save();

        $etudiant = new Etudiant;
        $etudiant->date_de_naissance = $request->date_de_naissance;
        $etudiant->id_pedagogie = $request->id_pedagogie;
        $etudiant->id_cas = $request->id_cas;
        $etudiant->id_personne = $user->id;
        $etudiant->save();

        $role_etudiant = Role::where('name', 'Etudiant')->first();
        $user->assignRole($role_etudiant);

        // $permission_etudiant = Permission::whereIn('name' , [])->get();
        // $user->givePermissionTo($permission_etudiant);

        // $role_etudiant->givePermissionTo($permission_etudiant);
    
        // Redirection vers une autre page ou affichage d'un message de succès
        return redirect()->route('etudiant.index')->with('success', 'Étudiant créé avec succès !');
    }

    public function storeAdminCas(Request $request , $id_annee , $id )
    {
        $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'date_de_naissance' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'id_pedagogie' => 'required',
        ]);
    
        // Création d'une nouvelle instance d'Etudiant avec les données du formulaire
        
        $user = new User();
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Assurez-vous de hasher le mot de passe
        $user->save();

        $etudiant = new Etudiant;
        $etudiant->date_de_naissance = $request->date_de_naissance;
        $etudiant->id_pedagogie = $request->id_pedagogie;
        $etudiant->id_cas = ClasseAnneeScolaire::where('id_annee_scolaire', $id_annee)
                                                    ->where('id_classe', $id)
                                                        ->first()->id;
        $etudiant->id_personne = $user->id;
        $etudiant->save();

        $role_etudiant = Role::where('name', 'Etudiant')->first();
        $user->assignRole($role_etudiant);

        // $permission_etudiant = Permission::whereIn('name' , [])->get();
        // $user->givePermissionTo($permission_etudiant);

        // $role_etudiant->givePermissionTo($permission_etudiant);
    
        // Redirection vers une autre page ou affichage d'un message de succès
        return redirect()->route('etudiant.index')->with('success', 'Étudiant créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //        //$userId = Auth::id();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
