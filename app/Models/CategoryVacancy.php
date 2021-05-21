<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryVacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryName'
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }
}
