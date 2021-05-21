<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'vacancy_id',
        'developer_id'
    ];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
