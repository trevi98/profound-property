<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location_tracker extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
