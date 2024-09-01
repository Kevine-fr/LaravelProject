<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'id_pedagogie'
    ];
    public function anneescolaires()
    {
        return $this->belongsToMany(Anneescolaire::class , 'classe_annee_scolaires' , 'id_classe', 'id_annee_scolaire');
    }
    public function pedagogies()
    {
        return $this->belongsTo(Pedagogie::class, 'id_pedagogie');
    }
}
