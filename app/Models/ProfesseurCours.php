<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesseurCours extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_professeur',
        'id_cours',
        'heure_faite',
        'duree'
        ];
    
        public function anneeclassesalles()
        {
            return $this->belongsToMany(ClasseAnneeScolaire::class, 'seances' , 'id_prof_cours' , 'id_cas');
        }
}
