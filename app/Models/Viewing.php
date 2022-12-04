<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewing extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'date' => 'date'
    ];
    public function client(){
        return $this->belongsTo(User::class , 'client_id');
    }

    public function agent(){
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
