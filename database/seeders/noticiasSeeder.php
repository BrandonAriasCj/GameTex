<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class noticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([ 
            'titulo'=>'guitar Hero de vuelta!',
            'contenido'=>'Hey amantes de el rock de los 80s y 90s ha vuelto..',
            'portada'=>'/database/public/portadas/guitarHero.jpg',
            'imagen 1'=> '/database/public/content-img/guitarras.jpg',
            'fecha_publicacion' => Carbon::create('2024', '11', '24'), 
        ]);
    }
}
