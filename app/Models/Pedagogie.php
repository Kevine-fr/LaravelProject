<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedagogie extends User
{
    use HasFactory;
    protected $fillable = [
    'id_personne',
    'is_pedagogie'
    ];
    
    public function personne()
    {
        return $this->belongsTo(User::class, 'id_personne');
    }

    public function salles()
    {
        return $this->hasMany(Salle::class , 'id_pedagogie');
    }
    public function classes()
    {
        return $this->hasMany(Classe::class , 'id_pedagogie');
    }
    public function anneescolaires()
    {
        return $this->hasMany(AnneeScolaire::class , 'id_pedagogie');
    }
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class , 'id_pedagogie');
    }   

}
