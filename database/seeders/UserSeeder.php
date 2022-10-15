<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $name = 'Dominique Vilain';
        User::factory()->create([
            'name' => $name,
            'slug' => Str::slug($name),
            'email' => 'dominique.vilain@hepl.be',
            'is_admin' => true,
        ]);
        User::factory()->count(9)->create();
    }
}
