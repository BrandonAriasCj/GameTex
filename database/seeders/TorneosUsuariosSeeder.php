<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TorneosUsuarios;
use App\Models\torneoModel;
use App\Models\User;

class TorneosUsuariosSeeder extends Seeder
{
    public function run()
    {
        // Insertar algunos torneos de ejemplo
        $torneo1 = torneoModel::create([
            'nombrej' => 'FIFA 2024',
            'creador' => 'Juan Pérez',
            'fecha_inicio' => now(),
            'fecha_fin' => now()->addDays(10),
            'exp' => 'FIFA2024',
            'imagen' => 'fifa2024.jpg',
            'torneo_juego_id' => 1, // Asumimos que ya existe en torneos_juegos
            'evento_tipo_id' => 1,  // Asumimos que ya existe en eventos_tipo
            'moderador_id' => 1,    // Asumimos que ya existe en moderadores
            'administrador_id' => 1, // Asumimos que ya existe en administradores
        ]);

        $torneo2 = torneoModel::create([
            'nombrej' => 'Counter-Strike 2',
            'creador' => 'Carlos López',
            'fecha_inicio' => now(),
            'fecha_fin' => now()->addDays(15),
            'exp' => 'CS2',
            'imagen' => 'cs2.jpg',
            'torneo_juego_id' => 2, // Asumimos que ya existe en torneos_juegos
            'evento_tipo_id' => 2,  // Asumimos que ya existe en eventos_tipo
            'moderador_id' => 2,    // Asumimos que ya existe en moderadores
            'administrador_id' => 1, // Asumimos que ya existe en administradores
        ]);

        // Insertar algunos usuarios de ejemplo
        $usuario1 = User::create([
            'name' => 'Ana Gómez',
            'email' => 'ana@example.com',
            'password' => bcrypt('password123'),
        ]);

        $usuario2 = User::create([
            'name' => 'Luis Martínez',
            'email' => 'luis@example.com',
            'password' => bcrypt('password123'),
        ]);

        // Insertar relaciones torneo-usuario (en la tabla torneo_usuario)
        if ($torneo1 && $usuario1) {
            TorneosUsuarios::create([
                'torneo_id' => $torneo1->id,
                'usuario_id' => $usuario1->id,
            ]);
        }

        if ($torneo2 && $usuario2) {
            TorneosUsuarios::create([
                'torneo_id' => $torneo2->id,
                'usuario_id' => $usuario2->id,
            ]);
        }

        // Puedes agregar más combinaciones de torneos y usuarios si lo deseas
    }
}
