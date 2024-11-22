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
                'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfYy-tIMRG8K5BUekH84ajEz2LmuzOp61jfw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
