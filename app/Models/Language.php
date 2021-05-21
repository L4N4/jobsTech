<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'language'
    ];

    public function langDev()
    {
        return $this->hasMany(LangDeveloper::class);
    }

    public function levelLang()
    {
        return $this->hasMany(LevelLang::class);
    }
}
