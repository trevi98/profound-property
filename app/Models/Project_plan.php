<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_plan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function project_size(){
        return $this->belongsTo(Project_size::class);
    }
}
