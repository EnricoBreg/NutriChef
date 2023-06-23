<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Utente che avrà ruolo di utente base
        \App\Models\User::factory()->create([
            'name' => 'Base User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        // Utente che avrà ruolo di amministratore
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), 
        ]);

    }
}
