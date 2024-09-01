<?php

namespace App\Http\Controllers;

use App\Models\ClasseAnneeScolaire;
use App\Models\AnneeScolaire;
use App\Models\Etudiant;
use App\Models\Classe;
use App\Models\Pedagogie;
use Illuminate\Http\Request;

class ClasseAnneeScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $classeanneescolaires = ClasseAnneeScolaire::all();
        
        // $classe = Classe::findOrFail(1);
        // $anneescolaire = AnneeScolaire::findOrFail(1);
        // dump($classe->nom);

        // $classeanneescolaires = ClasseAnneeScolaire::with('classes')->get();
        // dump($classeanneescolaires);
    
        // return view('annee', compact('classeanneescolaires'));
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
        'id_classe' => ['required'],
        'id_annee_scolaire' => ['required'],
    ]);

    // Vérifiez si une ligne avec les mêmes valeurs d'ID de classe et d'année scolaire existe déjà
    $existingRow = ClasseAnneeScolaire::where('id_classe', $request->input('id_classe'))
        ->where('id_annee_scolaire', $request->input('id_annee_scolaire'))
        ->first();

    if ($existingRow) {
        // Affichez un message d'erreur (vous pouvez personnaliser le message)
        return redirect()->back()->with('error', 'Cette combinaison classe-année existe déjà.');
    }

    // Si la ligne n'existe pas, ajoutez-la
    ClasseAnneeScolaire::create([
        'id_classe' => $request->input('id_classe'),
        'id_annee_scolaire' => $request->input('id_annee_scolaire')
    ]);

    return redirect()->route('classeanneescolaire.index');
}
public function storeAdmin(Request $request, $id)
{
    $request->validate([
        'nom' => ['required', 'numeric'],
        'id_pedagogie' => ['required', 'numeric'],
    ]);

    $id_c = $request->nom;
    $id_cas = Classe::findOrFail($id_c);

    // Vérifier si l'entrée existe déjà, sinon la créer
    ClasseAnneeScolaire::firstOrCreate(
        [
            'id_classe' => $id_cas->id,
            'id_annee_scolaire' => $id
        ]
    );

    return redirect()->route('anneescolaire.show', ['id' => $id]);
}


    /**
     * Display the specified resource.
     */
//     public function show($id , $id_annee)
//     {
//         $a = ClasseAnneeScolaire::where('id_annee_scolaire', $id_annee)
//         ->where('id_classe', $id)
//         ->first();

//         $classeanneescolaire = ClasseAnneeScolaire::findOrFail($id);

//         dump(Etudiant::where('id_cas' , $a->id)->get());
//         $nb_etudiant = 0;

//         $user = Pedagogie::with('personne')->get();

//         if ($classeanneescolaire && $a) {

//             $etudiant = Etudiant::where('id_cas' , $a->id)->get();

//             return view('pedagogie.classeanneescolaire.show', compact('classeanneescolaire', 'etudiant' ,'nb_etudiant' , 'user'));
//         } 
//         else {

//             return redirect()->route('anneescolaire.show')->with('error', 'Classe non trouvée');
//         }
// }


public function show($id_annee, $id)
{
    $anneescolaire = AnneeScolaire::findOrFail($id_annee);
    $classe = Classe::findOrFail($id);
    $classeanneescolaire = ClasseAnneeScolaire::where('id_annee_scolaire', $id_annee)
                                              ->where('id_classe', $id)
                                              ->first();

    // dump($classeanneescolaire);
    if ($classeanneescolaire) {
        $etudiant = Etudiant::where('id_cas', $classeanneescolaire->id)->get();
        $nb_etudiants = $etudiant->count();

        $user = Pedagogie::with('personne')->get();
       
        return view('pedagogie.classeanneescolaire.show', compact('classeanneescolaire', 'etudiant', 'nb_etudiants', 'user' , 'classe' , 'anneescolaire'));
    } else {
        $etudiant = [];
        $nb_etudiants = 0;

        $user = Pedagogie::with('personne')->get();

        return view('pedagogie.classeanneescolaire.show', compact('classeanneescolaire', 'etudiant', 'nb_etudiants', 'user' , 'classe' , 'anneescolaire'));
    }
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClasseAnneeScolaire $classeAnneeScolaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClasseAnneeScolaire $classeAnneeScolaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClasseAnneeScolaire $classeAnneeScolaire)
    {
        //
    }
}
