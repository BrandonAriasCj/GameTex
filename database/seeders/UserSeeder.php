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
        DB::table('usuarios')->insert([ 
            'name' => 'brandon', 
            'email' => 'br@mail.com', 
            'password' => bcrypt('852'), 
        ]);
        DB::table('usuarios')->insert([ 
            'name' => 'edwin', 
            'email' => 'ed@mail.com', 
            'password' => bcrypt('428'), 
        ]);
    }
}
