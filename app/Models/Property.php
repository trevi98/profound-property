<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];


    

// has many
    public function property_imgs(){
        return $this->hasMany(Property_img::class);
    }

    public function property_plans(){
        return $this->hasMany(Property_plan::class);
    }

    public function property_3ds(){
        return $this->hasMany(Property_3d::class);
    }

    public function near_locations(){
        return $this->hasMany(Near_location::class);
    }

    public function viewings(){
        return $this->hasMany(Viewing::class);
    }
    
//belongsTo

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
        
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
    
//many to many
    public function amenities(){
        return $this->belongsToMany(Amenity::Class);
    }

    public function community_amenities(){
        return $this->belongsToMany(Community_amenity::class);
    }
}
