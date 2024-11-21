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
            'stock' => 7, 
            'valor_dolar' => 5.32, 
            
        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'estrella de oro', 
            'stock' => 10, 
            'valor_dolar' => 7.99, 
            
        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'estrella de rubí', 
            'stock' => 15, 
            'valor_dolar' => 15, 
            
        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'Estelar Coins', 
            'stock' => 4, 
            'valor_dolar' =>70, 
            
        ]);
        DB::table('recompensas_tipo')->insert([ 
            'nombre' => 'planet Coins', 
            'stock' => 4, 
            'valor_dolar' => 30, 
            
        ]);
            
    }
        
}
