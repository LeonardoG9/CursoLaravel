<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','url_clean','content','category_id','posted'];

    public function Category(){
        return $this->belongsTo (Category::class);
    }
    
    public function PostImage(){
        return $this->hasOne(PostImage::class);
    }
}
