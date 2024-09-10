<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama al seeder de usuarios
        $this->call(UsersTableSeeder::class);

        // Llama al seeder de proyectos (si lo tienes)
        $this->call(ProyectosTableSeeder::class);
    }
}
