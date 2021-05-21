<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameSkill'
    ];

    public function skillsDev()
    {
        return $this->hasMany(SkillsDeveloper::class);
    }
}
