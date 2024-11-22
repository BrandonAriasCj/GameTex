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
            'nombre' => 'estrella de plata', 
    
        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'estrella de oro', 

        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'estrella de rubí', 
        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'Estelar Coins',             
        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'planet Coins', 
        ]);
            
    }
        
}
