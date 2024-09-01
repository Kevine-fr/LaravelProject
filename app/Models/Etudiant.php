<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends User
{
    use HasFactory;
    protected $fillable = [
        'date_de_naissance',
        'id_personne',
        'id_pedagogie',
        'id_cas',
    ];
    public function personne()
    {
        return $this->belongsTo(User::class, 'id_personne');
    }
    public function classesanneescolaires()
    {
        return $this->belongsTo(ClasseAnneeScolaire::class , 'id_cas');
    }
    public function pedagogies()
    {
        return $this->belongsTo(Pedagogie::class , 'id_pedagogie');
    }

}
