<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity_property extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'amenity_property';
}
