<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryPostRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        $categories = Category::all();
        $categories_ids = $categories->pluck('id');
        $posts = Post::all();
        $posts->each(function ($post) use ($categories_ids) {
            $c_ids = $categories_ids->random(random_int(0, 2));
            $c_ids->each(function ($c_id) use ($post) {
                $post->categories()->attach($c_id);
            });
        });
    }
}
