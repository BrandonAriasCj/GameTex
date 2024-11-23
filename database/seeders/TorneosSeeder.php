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
        DB::table('torneos')->insert([
            [
                'nombrej' => 'Torneo tecsup Counter Strike',
                'creador' => 'Carlos Pérez',
                'fecha_inicio' => Carbon::now()->addDays(1),
                'fecha_fin' => Carbon::now()->addDays(5),
                'exp' => 'Competencia de policías vs ladrones',
                'torneo_juego_id' => 1,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://hd2.tudocdn.net/1087711?w=824&h=494',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombrej' => 'Torneo tecsup Left 4 Dead 2',
                'creador' => 'Ana Gómez',
                'fecha_inicio' => Carbon::now()->addDays(3),
                'fecha_fin' => Carbon::now()->addDays(7),
                'exp' => 'Competencia de supervivencia',
                'torneo_juego_id' => 2,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://i.blogs.es/4d5731/ghc9svnbmaaago9/840_560.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombrej' => 'Torneo LoL Masters',
                'creador' => 'Luis Méndez',
                'fecha_inicio' => Carbon::now()->addDays(5),
                'fecha_fin' => Carbon::now()->addDays(10),
                'exp' => 'Competencia de League of Legends',
                'torneo_juego_id' => 3,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://example.com/lol_image.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombrej' => 'Torneo Call of Duty Mobile',
                'creador' => 'Daniel Ruiz',
                'fecha_inicio' => Carbon::now()->addDays(7),
                'fecha_fin' => Carbon::now()->addDays(12),
                'exp' => 'Competencia de disparos móviles',
                'torneo_juego_id' => 4,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://example.com/cod_mobile_image.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombrej' => 'Torneo Brawl Stars Challenge',
                'creador' => 'Sofía Jiménez',
                'fecha_inicio' => Carbon::now()->addDays(2),
                'fecha_fin' => Carbon::now()->addDays(8),
                'exp' => 'Competencia de Brawl Stars',
                'torneo_juego_id' => 5,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://example.com/brawl_stars_image.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombrej' => 'Clash Royale Cup',
                'creador' => 'Miguel Torres',
                'fecha_inicio' => Carbon::now()->addDays(4),
                'fecha_fin' => Carbon::now()->addDays(9),
                'exp' => 'Competencia de Clash Royale',
                'torneo_juego_id' => 6,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://example.com/clash_royale_image.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombrej' => 'Dragon Ball Fighters Championship',
                'creador' => 'Pedro López',
                'fecha_inicio' => Carbon::now()->addDays(8),
                'fecha_fin' => Carbon::now()->addDays(13),
                'exp' => 'Competencia de Dragon Ball Fighters',
                'torneo_juego_id' => 7,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://example.com/dragon_ball_image.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombrej' => 'Call of Duty Warzone Open',
                'creador' => 'Jorge Castillo',
                'fecha_inicio' => Carbon::now()->addDays(10),
                'fecha_fin' => Carbon::now()->addDays(15),
                'exp' => 'Competencia de Call of Duty Warzone',
                'torneo_juego_id' => 8,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://example.com/cod_warzone_image.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}