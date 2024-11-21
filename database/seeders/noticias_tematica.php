<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class noticias_tematica extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias_temtatica')->insert([ 
            'nombre' => 'musica', 
            'fecha_publicacion' => Carbon::create('2024', '11', '24'), 
            'password' => bcrypt('123'), 
        ]);
    }
}
