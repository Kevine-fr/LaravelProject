<?php

namespace App\Http\Controllers;

use App\Models\AnneeScolaire;
use Illuminate\Support\Facades\Auth;
use App\Models\ClasseAnneeScolaire;
use App\Models\Classe;
use App\Models\User;
use App\Models\Pedagogie;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class AnneeScolaireController extends Controller
{
    public function index()
    {        
        $nb_classe = Classe::count();
        $nb_etudiant = Etudiant::count();
        $nb_annee_scolaire = AnneeScolaire::count();

        $user = Pedagogie::with('personne')->get();
        $anneescolaire =  AnneeScolaire::with('classes')->get();

        return view('pedagogie.anneescolaire.index', compact('anneescolaire', 'nb_classe', 'nb_etudiant', 'nb_annee_scolaire' , 'user'));
    }

    public function indexLoad()
    {
        $classeanneescolaires = AnneeScolaire::with('classes')->get();

        $nb_classeannneescolaire = ClasseAnneeScolaire::count();

        $nb_annneescolaire = AnneeScolaire::count();

        $nb_etudiant = Etudiant::all();
        
        return view('pedagogie.classeanneescolaire.index', compact('classeanneescolaires','nb_classeannneescolaire' , 'nb_annneescolaire'));
    }
    
    public function store(Request $request)
    {
        $id_user = Auth::id();
        $pedagogie = Pedagogie::where('id_personne', $id_user)->first();
        $id_pedagogie = $pedagogie->id;

        $request->validate([
            'date_de_debut' => ['required', 'unique:annee_scolaires,date_de_debut'],
            'date_de_fin' => ['required', 'unique:annee_scolaires,date_de_fin'],
        ]);
        
        if($request->date_de_debut < $request->date_de_fin){
            AnneeScolaire::create([
                'date_de_debut' => $request->date_de_debut,
                'date_de_fin' => $request->date_de_fin,
                'id_pedagogie' => $id_pedagogie,
            ]);
    
            return redirect()->route('anneescolaire.index')->with('success' , "Année enregistrer avec succès !");
        }
        else
            return redirect()->route('anneescolaire.index')->with('error' , "La date de départ doit être inferieur à la date de fin");
        }

        

    public function storeAdmin(Request $request)
    {
        
        $request->validate([
            'date_de_debut' => ['required', 'unique:annee_scolaires,date_de_debut'],
            'date_de_fin' => ['required', 'unique:annee_scolaires,date_de_fin'],
            'id_pedagogie' => ['required', 'numeric']
        ]);

        if($request->date_de_debut < $request->date_de_fin){
            AnneeScolaire::create([
                'date_de_debut' => $request->date_de_debut,
                'date_de_fin' => $request->date_de_fin,
                'id_pedagogie' => $request->id_pedagogie,
            ]);
    
            return redirect()->route('anneescolaire.index')->with('success' , "Année enregistrer avec succès !");
        }
        else
            return redirect()->route('anneescolaire.index')->with('error' , "La date de début doit être inferieur à la date de fin");
        }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anneescolaire = AnneeScolaire::findOrFail($id);

        $cas = ClasseAnneeScolaire::where('id_annee_scolaire' , $id)->get();

        //Experience tout risque
        // dump($cas);
        // dump($cas->first()->etudiants());
        // dump($cas->first()->etudiants()->get());
        // dump($cas->first()->etudiants()->get()->first()->personne());
        // dump($cas->first()->etudiants()->get()->first()->personne()->first());
        // dump($cas->first()->etudiants()->get()->first()->personne()->get()->where('id' , 5)->first()->id);

        $user = Pedagogie::with('personne')->get();

        $nb_day_hours = 0;

        $id_anneescolaire = $id;

        $classe = Classe::all();

        return view('pedagogie.anneescolaire.show', compact('anneescolaire', 'user', 'cas' , 'id_anneescolaire', 'nb_day_hours' , 'classe'));

        }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anneescolaire = AnneeScolaire::findOrFail($id);
        return view('pedagogie.anneescolaire.edit', compact('anneescolaire'));
    }

    // Method to update an existing AnneeScolaire
    public function update(Request $request, $id)
    {
        $request->validate([
            'date_de_debut' => 'required|date',
            'date_de_fin' => 'required|date',
            'id_pedagogie' => ['required', 'numeric']

        ]);

        $anneescolaire = AnneeScolaire::findOrFail($id);
        $anneescolaire->update([
            'date_de_debut' => $request->date_de_debut,
            'date_de_fin' => $request->date_de_fin,
            'id_pedagogie' => $request->id_pedagogie
        ]);

        return redirect()->route('anneescolaire.index');
    }

    public function destroy(AnneeScolaire $id)
    {
        AnneeScolaire::findOrFail($id)->delete;
        return redirect()->route('anneescolaire.index');
    }
}
