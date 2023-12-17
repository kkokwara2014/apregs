<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
