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
                'fecha_inicio' => now()->addDays(1),
                'fecha_fin' => now()->addDays(5),
                'exp' => 'Competencia de policías vs ladrones',
                'torneo_juego_id' => 1,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://blizzstoreperu.com/cdn/shop/products/imagen-i4472-pge.jpg?v=1625079340',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Torneo tecsup Left 4 Dead 2',
                'creador' => 'Ana Gómez',
                'fecha_inicio' => now()->addDays(3),
                'fecha_fin' => now()->addDays(7),
                'exp' => 'Competencia de supervivencia',
                'torneo_juego_id' => 2,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://static.wikia.nocookie.net/cswikia/images/3/37/Cs2_boxart.jpg/revision/latest?cb=20230930151452',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Torneo LoL Masters',
                'creador' => 'Luis Méndez',
                'fecha_inicio' => now()->addDays(5),
                'fecha_fin' => now()->addDays(10),
                'exp' => 'Competencia de League of Legends',
                'torneo_juego_id' => 3,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/85791464ef14001205ecc3e756d002223a0c27f7-844x1124.png?auto=format&fit=fill&q=80&w=844',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Torneo Call of Duty Mobile',
                'creador' => 'Daniel Ruiz',
                'fecha_inicio' => now()->addDays(7),
                'fecha_fin' => now()->addDays(12),
                'exp' => 'Competencia de disparos móviles',
                'torneo_juego_id' => 4,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://cdn.moogold.com/2022/03/call-of-duty-mobile-logo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Torneo Brawl Stars Challenge',
                'creador' => 'Sofía Jiménez',
                'fecha_inicio' => now()->addDays(2),
                'fecha_fin' => now()->addDays(8),
                'exp' => 'Competencia de Brawl Stars',
                'torneo_juego_id' => 5,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://cdn-images.dzcdn.net/images/cover/7101fde1dc0dd501518992b774f7266d/0x1900-000000-80-0-0.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Clash Royale Cup',
                'creador' => 'Miguel Torres',
                'fecha_inicio' => now()->addDays(4),
                'fecha_fin' => now()->addDays(9),
                'exp' => 'Competencia de Clash Royale',
                'torneo_juego_id' => 6,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://m.media-amazon.com/images/I/61MNDOc5P7L.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Dragon Ball Fighters Championship',
                'creador' => 'Pedro López',
                'fecha_inicio' => now()->addDays(8),
                'fecha_fin' => now()->addDays(13),
                'exp' => 'Competencia de Dragon Ball Fighters',
                'torneo_juego_id' => 7,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsRo2xEUEZMHAgq2tI7BMELsUiEIssf8FzQw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrej' => 'Call of Duty Warzone Open',
                'creador' => 'Jorge Castillo',
                'fecha_inicio' => now()->addDays(10),
                'fecha_fin' => now()->addDays(15),
                'exp' => 'Competencia de Call of Duty Warzone',
                'torneo_juego_id' => 8,
                'evento_tipo_id' => 3,
                'moderador_id' => 1,
                'administrador_id' => 1,
                'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQontdbON1-xDkbajIpQ0tivSp4yY4AQqjlGw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}