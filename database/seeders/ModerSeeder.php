<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ModerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('moderadores')->insert([ 
            ['name' => 'mod1', 'email' => 'moder1@mail.com', 'password' => bcrypt('123')],
            ['name' => 'mod2', 'email' => 'moder2@mail.com', 'password' => bcrypt('123')],
            ['name' => 'mod3', 'email' => 'moder3@mail.com', 'password' => bcrypt('123')],
        ]);
    }
}

