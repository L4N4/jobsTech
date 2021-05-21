<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDeveloper extends Model
{
    use HasFactory;

    protected $fillable = [
        'education_id',
        'developer_id'
    ];

    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

}
