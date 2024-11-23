<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\AdminModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Test Users',
            'email' => 'test@example.com',
        ]);

        $this->call([AdminSeeder::class ]);
        $this->call([ModerSeeder::class]);
        $this->call([eventosSeeder::class]);
        $this->call([eventosTipoSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([juegosDSeeder::class]);
        $this->call([recompensasTipo::class]);
        $this->call([TorneoJuegosSeeder::class]);
        $this->call([TorneosSeeder::class]);
        $this->call([noticias_tematica::class]);
        $this->call([TorneosUsuariosSeeder::class]);
    }
}
