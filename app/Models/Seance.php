<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_prof_cours',
        'id_acs'
    ];

    public function dayhours()
    {
        return $this->belongsToMany(DayHour::class , 'emploi_du_temps' , 'id_seance' , 'id_day_hour');
    }
}
