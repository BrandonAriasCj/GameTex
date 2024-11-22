<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TorneosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar registros en la tabla 'torneos' para videojuegos
        DB::table('torneos')->insert([
            [
                'nombrej' => 'Torneo Left 4 Dead',
                'creador' => 'Carlos Pérez',
                'fecha_inicio' => now()->addDays(1),
                'fecha_fin' => now()->addDays(5),
                'exp' => 'Competencia de supervivencia en Left 4 Dead',
                'torneo_juego_id' => 1, // ID de juego Left 4 Dead
                'evento_tipo_id' => 1,  // ID del tipo de evento (puedes adaptarlo según tu base de datos)
                'moderador_id' => 1,    // ID del moderador
                'administrador_id' => 1, // ID del administrador
                'imagen' => 'left4dead_torneo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Torneo Counter Strike',
                'creador' => 'Marta Gómez',
                'fecha_inicio' => now()->addDays(2),
                'fecha_fin' => now()->addDays(6),
                'exp' => 'Competición de disparos tácticos en Counter-Strike',
                'torneo_juego_id' => 2, // ID de juego Counter Strike
                'evento_tipo_id' => 2,  // ID del tipo de evento (puedes adaptarlo según tu base de datos)
                'moderador_id' => 2,    // ID del moderador
                'administrador_id' => 1, // ID del administrador
                'imagen' => 'counterstrike_torneo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Torneo League of Legends',
                'creador' => 'Luis Fernández',
                'fecha_inicio' => now()->addDays(3),
                'fecha_fin' => now()->addDays(7),
                'exp' => 'Competencia de estrategia y acción en League of Legends',
                'torneo_juego_id' => 3, // ID de juego League of Legends
                'evento_tipo_id' => 3,  // ID del tipo de evento (puedes adaptarlo según tu base de datos)
                'moderador_id' => 3,    // ID del moderador
                'administrador_id' => 1, // ID del administrador
                'imagen' => 'leagueoflegends_torneo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
