<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'experienceRequired',
        'salary',
        'currency',
        'descriptionVacancy',
        'state',
        'endDate',
        'categoryvacancy_id',
        'recruiter_id',
        'countryvacancy_id'
    ];

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }

    public function categoryVacancy()
    {
        return $this->belongsTo(CategoryVacancy::class);
    }

    public function countryVacancy()
    {
        return $this->belongsTo(CountryVacancy::class);
    }

    public function techsVacancy()
    {
        return $this->hasMany(TechsVacancy::class);
    }

    public function candidate()
    {
        return $this->hasMany(Candidate::class);
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->descriptionVacancy, 0, 250);
    }
}
