<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretariat extends User
{
    use HasFactory;
    protected $fillable = [
    'id_personne',
    'is_secretariat'
    ];
    public function personne()
    {
        return $this->belongsTo(User::class , 'id_personne');
    }
    
    public function cours()
    {
        return $this->hasMany(Cours::class , 'id_secretariat');
    }

    public function professeurs()
    {
        return $this->hasMany(Professeur::class , 'id_secretariat');
    }
}
