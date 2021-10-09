<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $categories=Category::all();
        foreach ($categories as $key => $c) {
            for($i=1;$i<=20;$i++){

                Post::create([
                    'title'=>"Post $key-$i",
                    'url_clean'=>"url_post-$key-$i",
                    'content'=> "Test content for post $key-$i",
                    'posted'=>'yes',
                    'category_id'=>$c->id
                ]);
            }
        }
    }
}