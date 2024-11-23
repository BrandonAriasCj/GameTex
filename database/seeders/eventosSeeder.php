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

        $eventoTipoId = DB::table('eventos_tipo')->insertGetId([
            'nombre' => 'Conferencia',
            'descripcion' => 'Evento de conferencia anual',
            'categoria' => 'gaming',
            'reglas' => 'Respetar horarios y normas del evento',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $moderadorId = DB::table('moderadores')->insertGetId([
            'name' => 'casparrin',
            'email' => 'casp@mail.com',
            'password' => bcrypt('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('eventos')->insert([
            'fecha_inicio' => Carbon::create('2024', '10', '15'),
            'fecha_fin' => Carbon::create('2024', '11', '24'),
            'evento_tipo_id' => $eventoTipoId,
            'moderador_id' => $moderadorId,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
