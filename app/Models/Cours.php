<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'id_secretariat',
        'duree',
    ];
    
    public function professeurs()
    {
        return $this->belongsToMany(Professeur::class, 'professeur_cours' , 'id_cours' , 'id_professeur');
    }
    public function secretariats()
    {
        return $this->belongsTo(Secretariat::class , 'id_secretariat');
    }
}
