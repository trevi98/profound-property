<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'date' => 'date'
    ];

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function developer(){
        return $this->belongsTo(Developer::class);
    }

    public function payment_plan(){
        return $this->hasMany(Payment_plan::class);
    }

    public function project_status(){
        return $this->belongsTo(Project_status::class);
    }
    public function project_size(){
        return $this->hasMany(Project_size::class);
    }

    public function near_by_location(){
        return $this->hasMany(Near_location::class);
    }
    
    public function project_imgs(){
        return $this->hasMany(Project_img::class);
    }

    public function type()
    {
        return $this->hasManyThrough(Type::class, Project_size::class);
    }

    public function aminity(){
        return $this->belongsToMany(Aminity::class);
    }
    
    public function community_aminity(){
        return $this->belongsToMany(Community_amenity::class);
    }


    

}
