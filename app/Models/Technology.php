<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameTech'
    ];

    public function techsVacancy()
    {
        return $this->hasMany(TechsVacancy::class);
    }

    public function techsDeveloper()
    {
        return $this->hasMany(TechsDeveloper::class);
    }
}
