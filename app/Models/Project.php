<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function payment_plan(){
        return $this->hasMany(Payment_plan::class);
    }
    public function aminity(){
        return $this->belongsToMany(Aminity::class);
    }
    public function community_aminity(){
        return $this->belongsToMany(Community_amenity::class);
    }
    public function developer(){
        return $this->belongsTo(Developer::class);
    }
    public function near_by_location(){
        return $this->hasMany(Near_location::class);
    }

}
