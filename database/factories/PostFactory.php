<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $created_at = Carbon::create(fake()->dateTimeBetween('-3 years', 'now'));
        $updated_at = random_int(1, 10) > 5 ? $created_at : $created_at->addWeeks(random_int(2, 8));
        $published_at = $created_at->addDays(random_int(0, 2) * random_int(2, 20));
        $title = fake()->sentence(10);
        return [
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'published_at' => $published_at,
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->sentence(40),
            'thumbnail' => fake()->imageUrl(640, 480, true, 'landscape'),
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
        ];
    }
}
