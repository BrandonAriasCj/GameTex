<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Axel Loayza',
            'email' => 'usera@gametex.com',
            'estado' => 'activo',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
            'current_team_id' => null,
            'profile_photo_path' => 'images/profile_juan.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Carlos Asparrin',
            'email' => 'userc@gametex.com',
            'estado' => 'activo',
            'discord' => 'sujetodelta_2005',
            'email_verified_at' => now(),
            'password' => bcrypt('123'), 
            'remember_token' => Str::random(10),
            'current_team_id' => null,
            'profile_photo_path' => 'images/profile_ana.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Brandon Arias',
            'email' => 'userb@gametex.com',
            'estado' => 'activo',
            'discord' => 'brandon_92048',
            'email_verified_at' => now(),
            'password' => bcrypt('123'), 
            'remember_token' => Str::random(10),
            'current_team_id' => null,
            'profile_photo_path' => 'images/profile_ana.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
