<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'name' => 'Dominique Vilain',
            'email' => 'dominique.vilain@hepl.be',
            'is_admin' => true,
        ]);
        User::factory()->count(9)->create();
    }
}
