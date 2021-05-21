<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelLang extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'language_id'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
