<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'taille',
        'id_pedagogie'
    ];

    public function pedagogies()
    {
        return $this->belongsTo(Pedagogie::class, 'id_pedagogie');
    }
    public function classeanneescolaires()
    {
        return $this->belongsToMany(ClasseAnneeScolaire::class , 'annee_classe_salles', 'id_salle' , 'id_classe_annee');
    }
}
