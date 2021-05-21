<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    protected $fillable = [
        'experience',
        'aboutMe',
        'curriculum',
        'photo',
        'portfolio'
    ];

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }
    
    public function educDev()
    {
        return $this->hasMany(EducationDeveloper::class);
    }

    public function certification()
    {
        return $this->hasMany(Certification::class);
    }
}
