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
    public function sub_location(){
        return Location::where('parent_id',$this->id)->get();
    }
    public function project(){
        return $this->hasMany(Project::class);
    }
}
