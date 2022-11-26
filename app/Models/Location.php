<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function property(){
        return $this->hasMany(Property::class);
    }
    public function project(){
        return $this->hasMany(Project::class);
    }
    public function image(){
        return $this->hasMany(Location_image::class);
    }
    public function developer()
    {
        return $this->hasManyThrough(Project::class, Developer::class);
    }
}
