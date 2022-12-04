<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_img extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
