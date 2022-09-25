<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriePostRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_ids = DB::table('categories')->pluck('id');

        for ($i = 0; $i < 100; $i++) {
            $post_id = DB::table('posts')->select('id')->skip($i)->take(1)->first()->id;
            for ($j = rand(0, intdiv(7, 2)); $j < 7; $j += rand(1, 7)) {
                $category_id = $categories_ids[$j];
                DB::table('category_post')->insert(compact('category_id', 'post_id'));
            }
        }
    }
}
