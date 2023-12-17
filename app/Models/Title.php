<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function supervisors()
    {
        return $this->hasMany(Supervisor::class);
    }
    public function technologists()
    {
        return $this->hasMany(Technologist::class);
    }
}
