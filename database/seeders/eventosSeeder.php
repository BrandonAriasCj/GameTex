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
            'fecha_inicio' => Carbon::create('15-10-2024'), 
            'fecha_fin' => Carbon::create('24-11-2024'),
        ]);
    }
}
