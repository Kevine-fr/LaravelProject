<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_day',
        'id_hour'
    ];
    public function days()
    {
        return $this->belongsTo(Day::class , 'id_day');
    }
    public function hours()
    {
        return $this->belongsTo(Hour::class , 'id_hour');
    }
}

