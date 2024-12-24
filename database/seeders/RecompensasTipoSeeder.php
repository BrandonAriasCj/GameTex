<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecompensasTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recompensas_tipo')->insert([ 
            ['nombre'=>'Tarjetas de regalo', 'cantidad'=>5],      
            ['nombre'=>'Claves de Juegos', 'cantidad'=>5],    
        ]);
    }
}