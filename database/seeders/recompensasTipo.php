<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class recompensasTipo extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        DB::table('recompensas_tipo')->insert([
            ['nombre' => 'Tarjetas de regalo'],
            ['nombre' => 'Dinero'],
            ['nombre' => 'Juegos'],
        ]);        
            
    }
        
}
