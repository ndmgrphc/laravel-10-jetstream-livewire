<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'current_team_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'id' => 2,
            'name' => 'Not Me',
            'email' => 'notme@example.com',
            'password' => Hash::make('betterpassword'),
            'current_team_id' => 1
        ]);

        $this->call([
            TeamSeeder::class
        ]);
    }
}
