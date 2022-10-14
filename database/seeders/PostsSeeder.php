<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        User::all()->each(static function ($user) {
            /** Some posts still available */
            Post::factory()
                ->count(random_int(10, 30))
                ->for($user)
                ->create();
            /** A few posts soft deleted */
            Post::factory()
                ->trashed()
                ->count(random_int(1, 3))
                ->for($user)
                ->create();
        });
    }
}
