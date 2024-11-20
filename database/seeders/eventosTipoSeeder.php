<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class eventosTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos_tipo')->insert([ 
            'id'=> 1,
            'nombre'=>'Halloween Ghosts',
            'descripcion'=>'evento de Halloween que promociona imagenes aterradoras de fantasmas en juegos',
            'categoria'=>'party, screemers , terror, fantasmas',
            'reglas'=>'solo una captura por usuario',
            
        ]);
    }
}
