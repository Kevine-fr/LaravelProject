<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;

    protected $fillable = [
        'heure_de_debut',
        'heure_de_fin',
    ];
    public function day_hours(){
        return $this->belongsToMany(DayHour::class , 'day_hours' , 'id_hour' , 'id_day');
    }

    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'emploi_du_temps' , 'id_hour' , 'id_seance');
    }
}
