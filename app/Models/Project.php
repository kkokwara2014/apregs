<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function academicyear()
    {
        return $this->belongsTo(Academicyear::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
    public function technologist()
    {
        return $this->belongsTo(Technologist::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
