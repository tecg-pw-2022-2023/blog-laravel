<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $posts = Post::all();
        $posts->each(static function($post){
            Comment::factory()
                ->count(random_int(0,10))
                ->for($post)
                ->create();
        });

    }
}
