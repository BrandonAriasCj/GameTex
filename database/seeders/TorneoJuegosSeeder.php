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
            ['nombre' => 'Left4 Dead2', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Counter Strike', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
            ['nombre' => 'Jaassadfa', 'created_at' => '2024-11-21 00:00:00', 'updated_at' => '2024-11-21 00:00:00'],
        ]);
    }
}

