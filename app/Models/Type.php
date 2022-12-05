<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function properties(){
        return $this->hasMany(Property::class);
    }

    public function project_size(){
        return $this->hasOne(Size::class);
    }
}
