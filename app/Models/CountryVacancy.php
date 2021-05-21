<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryVacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'country'
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }
}
