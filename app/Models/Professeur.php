<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends User
{
    use HasFactory;
    protected $fillable = [
    'id_personne',
    'id_secretariat',
    'is_professeur'
    ];

    public function personne()
    {
        return $this->belongsTo(User::class , 'id_personne');
    }

    public function secretariats()
    {
        return $this->belongsTo(Secretariat::class, 'id_secretariat');
    }
    
    public function cours()
    {
        return $this->belongsToMany(Cours::class ,'professeur_cours' , 'id_professeur' , 'id_cours');
    }
}
