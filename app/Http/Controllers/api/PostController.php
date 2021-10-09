<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::join('post_images','post_images.post_id','=',"posts.id")->
        join('categories','categories.id','=',"posts.id")->
        select('posts.*','categories.title as category','post_images.image')->
        orderBy('posts.created_at','desc')->paginate(20);
        return $this->successResponse($posts);
    }

 
    public function show(Post $post)
    {
        $post->category;
        $post->image;
        return $this->successResponse($post);


    }
    public function url(String $url_clean)
    {
        $post=Post::where('url_clean',$url_clean)->firstOrFail();
        $post->category;
        $post->image;
        return $this->successResponse($post);


    }
    public function category(Category $category){
        return $this->successResponse($category->post()->paginate(10));
    }


 
}
