<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_size extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function size(){
        return $this->belongsTo(Size::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function project_plan(){
        return $this->hasOne(Project_plan::class);
    }

    public function project_3d(){
        return $this->hasOne(Project_3d::class);
    }
}
