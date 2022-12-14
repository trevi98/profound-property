<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_3d extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function project_size(){
        return $this->belongsTo(Project_size::class);
    }
}
