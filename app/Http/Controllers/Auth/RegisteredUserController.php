<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Models\Professeur;
use App\Models\Secretariat;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Salle;
use App\Models\Pedagogie;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Permet d'assigner le role 'Administrateur' au premier utilisateur créer
        $role_administrateur = Role::where('name', 'Administrateur')->first();
        $user->assignRole($role_administrateur);

        //Permet d'assigner la permission 'Gérer Utilisateurs' au premier utilisateur créer
        $permission_administrateur = Permission::whereIn('name' , ['Gérer Utilisateurs',
        'Gérer Salles','Gérer Classes','Gérer Années Scolaires','Gérer Etudiants','Gérer Cours','Gérer Professeurs'])->get();
        $user->givePermissionTo($permission_administrateur);

        //Permet d'assigner le role 'Administrateur' à la permission 'Gérer Utilisateurs en fonction de leur id respectifs
        $role_administrateur->givePermissionTo($permission_administrateur);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function create_personne(Request $request){
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => 'required',
            'role' => 'required',
            // 'date_de_naissance' => ['required', 'date']
        ]);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Récupérer la valeur du champ "role"
        $role = $request->input('role');
        // $date_de_naissance = $request->input('date_de_naissance');

        //Perme d'afficher toutes les données de la table role dans le champ select de la vue
        $roles = Role::whereNotIn('id', [1, Role::count()])->get();

        $id_profil = $request->input('profil');

        // Vérifier si le rôle est égal à 2
        if ($role == 2) {
            // Créer une instance de Pedagogie
            $personne = new Pedagogie;
            $personne->id_personne = $user->id;
            $personne->is_pedagogie = 1;
            $personne->save();

            // Attribuer le rôle à l'utilisateur
            $role_personne = Role::findOrFail($role);
            $user->assignRole($role_personne);

            // Donner les permissions liées au rôle
            $permission_personne = Permission::whereIn('name', ['Gérer Salles', 'Gérer Classes', 'Gérer Années Scolaires', 'Gérer Etudiants'])->get();
            $user->givePermissionTo($permission_personne);
            $role_personne->givePermissionTo($permission_personne);
        }

        if ($role == 3) {
            // Créer une instance de Secretariat
            $personne = new Secretariat;
            $personne->id_personne = $user->id;
            $personne->is_secretariat = 1;
            $personne->save();

            // Attribuer le rôle à l'utilisateur
            $role_personne = Role::findOrFail($role);
            $user->assignRole($role_personne);

            // Donner les permissions liées au rôle
            $permission_personne = Permission::whereIn('name', ['Gérer Cours', 'Gérer Professeurs'])->get();
            $user->givePermissionTo($permission_personne);
            $role_personne->givePermissionTo($permission_personne);
        }

        // if ($role == 4) {
        //     // Créer une instance de Professeur
        //     $personne = new Professeur;
        //     $personne->id_personne = $user->id;
        //     $personne->id_secretariat = 0;
        //     $personne->is_professeur = 1;
        //     $personne->save();

        //     // Attribuer le rôle à l'utilisateur
        //     $role_personne = Role::findOrFail($role);
        //     $user->assignRole($role_personne);

        //     // Donner les permissions liées au rôle
        //     $permission_personne = Permission::where('name', 'Demande Modification Planning')->get();
        //     $user->givePermissionTo($permission_personne);
        //     $role_personne->givePermissionTo($permission_personne);
        // }

        // if ($role == 5) {
        //     // Créer une instance de Professeur
        //     $personne = new Etudiant;
        //     $personne->id_personne = $user->id;
        //     $personne->id_pedagogie = 0;
        //     $personne->id_cas = 0;
        //     $personne->date_de_naissance = $date_de_naissance;
        //     $personne->save();

        //     $role_personne = Role::findOrFail($role);
        //     $user->assignRole($role_personne);

        // }

        return redirect()->route('user.success')->with('success' , 'Profil créer avec succès !');
    }

    public function creation_success(){
        $roles = Role::whereNotIn('id', [1,4,5])->get();

        return view('create' , compact('roles') );
    }

    public function index(){

        $personne = User::whereHas('roles', function($query){
            $query->whereIn('id', [2,3,4,5]);
        })->get();
        $user = User::findOrFail(1);
        // $roles = Role::whereNotIn('id', 1)->get();

        $nb_user = $personne->count();
        $nb_pedagogie = Pedagogie::count();
        $nb_secretariat = Secretariat::count();
        $nb_professeur = Professeur::count();
        $nb_etudiant = Etudiant::count();

        //Other
        $nb_classe = Classe::count();
        $nb_salle = Salle::count();
        $nb_cours = Cours::count();
    
        return view('home' , compact('personne', 'user', 'nb_user', 'nb_pedagogie', 'nb_secretariat', 'nb_professeur', 'nb_etudiant', 'nb_classe', 'nb_salle', 'nb_cours'));
    }

    public function filter(Request $request){
        // Récupérer tous les utilisateurs qui ont un rôle spécifique

        $id = $request->id;
        $role = Role::findOrFail($id);
        
        //Filtrer pour afficher que les profils pédagogie
        if($id == 2){
        $personne = User::whereHas('roles', function($query){
            $query->where('name', 'Pedagogie');
        })->get();
    
        return view('user.filter' , compact('personne' , 'role'));
        }

        //Filtrer pour afficher que les profils secretariat
        if($id == 3){
            $personne = User::whereHas('roles', function($query){
                $query->where('name', 'Secretariat');
            })->get();
        
            return view('user.filter' , compact('personne' , 'role'));
            }

        //Filtrer pour afficher que les profils professeur
        if($id == 4){
            $personne = User::whereHas('roles', function($query){
                $query->where('name', 'Professeur');
            })->get();
        
            return view('user.filter' , compact('personne' , 'role'));
            }

    }

    public function edit($id , $id_role){

        // $personne = User::whereHas('roles', function($query) use ($id) {
        //     $query->where('id', $id);
        // })->with('roles')->get();        
        
        // $id_personne = $id;
        $id_role_origin = $id_role;
        $personne = User::findOrFail($id);
        $role = Role::findOrFail($id_role);
        $roles = Role::whereNotIn('id', [1, Role::count()])->get();

        // dump ($personne);
        // dump($role);
        // dump($roles);

        return view('user.edit', compact('personne' , 'role', 'roles', 'id_role_origin'));
    }

    public function delete($id){
        User::findOrFail($id)->delete();

        return redirect()->route('user.index');
    }

    public function upgrade(Request $request, $id){

    $id_role_origin = $request->id_role_origin;    
    $id_role = $request->input('role');
    $personne = User::findOrFail($id);
    $role = Role::findOrFail($id_role);

    // Mise à jour des attributs de l'utilisateur
    $personne->name = $request->input('name');
    $personne->first_name = $request->input('first_name');
    $personne->email = $request->input('email');
    $personne->password = Hash::make($request->input('password'));
    
    // Mise à jour du rôle de l'utilisateur

    $role_id = User::findOrFail($id)->roles()->sync([Role::findOrFail($id_role)->id]);

    //Methode permettant d'avoir l'historique d'une personne (De savoir si son profil a été changé ou non par l'Administrateur)
    if ($id_role != $id_role_origin && $id_role_origin == 2) {
        $pedagogie = Pedagogie::where('id_personne', $id);
        
        if($pedagogie){
            $pedagogie->update(['is_pedagogie' => 0]);

            if($id_role == 3){
                $new_secretariat = new Secretariat;
                $new_secretariat->id_personne = $id;
                $new_secretariat->is_secretariat = 1;
                $new_secretariat->save();
            }
            if($id_role == 4){
                $new_professeur = new Professeur;
                $new_professeur->id_personne = $id;
                $new_professeur->is_professeur = 1;
                $new_professeur->save();
            }

        }else{
            $new_pedagogie = new Pedagogie;
            $new_pedagogie->id_personne = $id;
            $new_pedagogie->is_pedagogie = 1;
            $new_pedagogie->save();
        }
    }

    if ($id_role != $id_role_origin && $id_role_origin == 3) {
        $secretariat = Secretariat::where('id_personne', $id);

        if($secretariat){
            $secretariat->update(['is_secretariat' => 0]);

            if($id_role == 2){
                $new_pedagogie = new Pedagogie;
                $new_pedagogie->id_personne = $id;
                $new_pedagogie->is_pedagogie = 1;
                $new_pedagogie->save();
            }
            if($id_role == 4){
                $new_professeur = new Professeur;
                $new_professeur->id_personne = $id;
                $new_professeur->is_professeur = 1;
                $new_professeur->save();
            }

        }else{
            $new_secretariat = new Secretariat;
            $new_secretariat->id_personne = $id;
            $new_secretariat->is_secretariat = 1;
            $new_secretariat->save();
        }
    }

    if ($id_role != $id_role_origin && $id_role_origin == 4) {
        $professeur = Professeur::where('id_personne', $id);
        
        if($professeur){
            $professeur->update(['is_professeur' => 0]);

            if($id_role == 2){
                $new_pedagogie = new Pedagogie;
                $new_pedagogie->id_personne = $id;
                $new_pedagogie->is_pedagogie = 1;
                $new_pedagogie->save();
            }
            if($id_role == 3){
                $new_secretariat = new Secretariat;
                $new_secretariat->id_personne = $id;
                $new_secretariat->is_secretariat = 1;
                $new_secretariat->save();
            }

        }else{
            $new_professeur = new Professeur;
            $new_professeur->id_personne = $id;
            $new_professeur->is_professeur = 1;
            $new_professeur->save();
        }
    }
    
    // dump($role_id);

    $personne->save();

    return redirect()->route('user.index')->with('success', 'Profil mis à jour avec succès');

    }  
    
}
