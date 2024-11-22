<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class noticias_tematica extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias_tematica')->insert([ 
            'id'=>1,
            'nombre' => 'musica', 
        ]);
        DB::table('noticias_tematica')->insert([ 
            'id'=>2,
            'nombre' => 'arte', 
        ]);
        DB::table('noticias_tematica')->insert([ 
            'id'=>3,
            'nombre' => 'terror', 
        ]);
        DB::table('noticias_tematica')->insert([ 
            'id'=>4,
            'nombre' => 'anime', 
        ]);
    }
}
