<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function project(){
        return $this->hasOne(Project::class);
    }
    public function location()
    {
        return $this->hasManyThrough(Location::class, Project::class);
    }
}
