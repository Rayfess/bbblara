<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'rahasia',
            'role' => \App\Enums\UserRole::ADMIN->value,
        ]);
        User::factory()->create([
            'name' => 'Garamudu',   
            'email' => 'mata@example.com',
            'password' => 'rahasia',
            'role' => \App\Enums\UserRole::SUPERADMIN->value,
        ]);
        User::factory()->create([
            'name' => 'El Matadore',
            'email' => 'kunci@mata.com',
            'password' => 'rahasia',
            'role' => \App\Enums\UserRole::ADMIN->value,
        ]);
    }
}
