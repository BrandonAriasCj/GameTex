<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([ 
            'name' => 'asparrin', 
            'email' => 'asp@mail.com', 
            'password' => bcrypt('123'), 
        ]);
    }
}
