<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunityAmenity_project extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'community_amenity_project';

    protected $fillable = [
        'project_id',
        'community_amenity_id',
    ];
}
