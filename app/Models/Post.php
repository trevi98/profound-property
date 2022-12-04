<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function images(){
        return $this->hasMany(Post_img::class);
    }
}
