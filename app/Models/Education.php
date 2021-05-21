<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameEducation',
        'level'
    ];

    public function educDev()
    {
        return $this->hasMany(EducationDeveloper::class);
    }
}
