<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_annee_scolaire',
        'date'
    ];
    public function anneescolaires()
    {
        return $this->belongsTo(AnneeScolaire::class , 'id_annee_scolaire');
    }
    public function day_hours(){
        return $this->belongsToMany(DayHour::class , 'day_hours' , 'id_day' , 'id_hour');
    }
}
