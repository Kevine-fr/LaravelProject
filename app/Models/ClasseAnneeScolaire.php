<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseAnneeScolaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_annee_scolaire',
        'id_classe'
    ];
    
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class , 'id_cas');
    }
    public function classes()
    {
        return $this->belongsTo(Classe::class , 'id_classe');
    }
    public function anneescolaires()
    {
        return $this->belongsTo(AnneeScolaire::class , 'id_annee_scolaire');
    }
    
    public function professeurcours()
    {
        return $this->belongsToMany(ProfesseurCours::class , 'seances' , 'id_cas' , 'id_prof_cours');
    }
}
