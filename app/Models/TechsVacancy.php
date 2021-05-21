<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechsVacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'technology_id',
        'vacancy_id'
    ];

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }

}
