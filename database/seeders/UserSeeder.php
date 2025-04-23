<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Majahdata',
            'username' => 'akuSadmin99',
            'role' => \App\Enums\UserRole::SUPERADMIN,
        ]);
        User::factory()->create([
            'name' => 'Wadyatama',
            'username' => 'akuAdmin88',
            'role' => \App\Enums\UserRole::ADMIN,
        ]);

        User::factory(3)->create();
    }
}
