<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable=['post_id','image'];

    public function Post(){
        return $this->belongsTo (Post::class);
    }
}
