<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity_project extends Model
{
    use HasFactory;

    protected $table = 'amenity_project';
    // protected $guarded = [];
    protected $guarded=[];


    protected $fillable = [
        'amenity_id',
        'project_id',
    ];
}
