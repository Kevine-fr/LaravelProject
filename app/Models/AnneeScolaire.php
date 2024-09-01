<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeScolaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_de_debut',
        'date_de_fin' ,
        'id_pedagogie'
    ];
    // Classe.php
    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'classe_annee_scolaires' , 'id_annee_scolaire' , 'id_classe');
    }
    public function pedagogies()
    {
        return $this->belongsTo(Pedagogie::class);
    }
    public function days()
    {
        return $this->hasMany(Day::class, 'id_annee_scolaire');
    }
}
