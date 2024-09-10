<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'), // Usa Hash::make para encriptar la contraseña
        ]);

        // Puedes agregar más usuarios si lo deseas
        User::create([
            'name' => 'Another User',
            'email' => 'another@example.com',
            'password' => Hash::make('anotherpassword'),
        ]);
    }
}