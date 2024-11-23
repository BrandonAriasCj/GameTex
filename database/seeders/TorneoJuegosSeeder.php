<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TorneoJuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('torneos_juegos')->insert([
            ['nombre' => 'Left 4 Dead 2', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Counter Strike 2', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'League of legends', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Call of Duty Mobile', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Brawl Stars', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Clash Royale', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Dragon Ball Fighters', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Call of Duty Warzone', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
        ]);
    }
}

