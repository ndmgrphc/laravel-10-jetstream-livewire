<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'id' => 1,
            'user_id' => 1,
            'name' => "A-Team",
            'personal_team' => false, // aye...
        ]);

        DB::table('team_user')->insert([
            'team_id' => 1,
            'user_id' => 1,
            'role' => "participant",
        ]);

    }
}
