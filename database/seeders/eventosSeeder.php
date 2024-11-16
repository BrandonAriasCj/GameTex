<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class eventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos')->insert([ 
            'id'=> 1,
            'nombre' => 'HalloweenGosts', 
            'descripcion'=>'Un evento anual que trae la tematica de ganar en juegos de tipo Jumpscare',
            'reglas' =>' mantener el respeto, no usar hacks , solo seguir las indicaciones,etc.',
            'fecha_inicio' => Carbon::create('15-10-2024'), 
            'fecha_fin' => Carbon::create('24-11-2024'),
        ]);
    }
}
