<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechsDeveloper extends Model
{
    use HasFactory;

    protected $fillable = [
        'technology_id',
        'developer_id'
    ];

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }

    public function developers()
    {
        return $this->belongsTo(Developer::class);
    }
}
