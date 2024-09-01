<?php

namespace App\Http\Controllers;

use App\Models\AnneeScolaire;
use App\Models\Day;
use App\Models\Hour;
use App\Models\DayHour;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $day = Day::where('id_annee_scolaire' , $id)->get();
        $nb_day = $day->count();
        $id_annee = $id;
        $nb_days = 0;
        $anneescolaire = AnneeScolaire::findOrFail($id);

        return view('secretariat.day.index', compact('day', 'nb_day' , 'id_annee' , 'anneescolaire' , 'nb_days'));
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
    public function store(Request $request , $id_annee)
    {
        $request->validate([
            'date' => ['required', 'unique:days,date'],
        ]);

        $day_year = AnneeScolaire::where('id' , $id_annee)->first();

        // dump($day_year);
        
        if ($day_year  && $request->date >= $day_year->date_de_debut && $request->date <= $day_year->date_de_fin) {
            Day::create([
                'date' => $request->date,
                'id_annee_scolaire' => $id_annee
            ]);
        
            return redirect()->route('day.index', ['id' => $id_annee])
                             ->with('success', 'Jour ajouté avec succès');
        } else {
            return redirect()->route('day.index', ['id' => $id_annee])
                             ->with('error', "La date doit être comprise entre $day_year->date_de_debut et $day_year->date_de_fin !");
        }
    }
        

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $day = Day::findOrFail($id);
        $nb_day_hour = DayHour::count();

        $nb_day_hours = 0;

        $hours = Hour::all();
        $day_hour = DayHour::where('id_day' , $id)->get();

        // $year_of_day = Day::with('anneescolaires')->first();
        // dump($year_of_day->anneescolaires->date_de_fin);

        return view('secretariat.day.show' , compact('day' , 'nb_day_hour' , 'nb_day_hours', 'hours' , 'day_hour'));
    }

    public function storeHours(Request $request, $id)
    {
        $day = Day::findOrFail($id);
        $selectedHours = $request->input('hours', []);

        // Valider les données
        $request->validate([
            'hours' => 'required|array',
            'hours.*' => 'distinct|exists:hours,id'
        ]);

        // Vérifier et ajouter chaque heure
        foreach ($selectedHours as $hourId) {
            $exists = DayHour::where('id_day', $day->id)->where('id_hour', $hourId)->exists();
            if (!$exists) {
                DayHour::create([
                    'id_day' => $day->id,
                    'id_hour' => $hourId
                ]);
            }
            else{
                
        return redirect()->route('day.show', ['id' => $day->id])
                ->with('error', "Echec d'enregistrement !" );
            }
        }
        return redirect()->route('day.show', ['id' => $day->id])
                ->with('success', 'Les heures ont été enregistrées avec succès.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Day $day)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Day $day)
    {
        //
    }
}
