<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameCompany',
        'descriptionCompany',
        'websiteCompany',
        'photoCompany'
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }
}
