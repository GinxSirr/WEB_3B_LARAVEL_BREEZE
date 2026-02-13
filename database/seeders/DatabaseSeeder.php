<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'firstname' => 'Admin',
            'middlename' => 'User',
            'lastname' => 'Admin',
            'dob' => '1990-01-01',
            'email' => 'admin@admin.com',
            'password' =>'password',
            'role' => 'Admin',
        ]);

         User::factory()->create([
            'firstname' => 'Normal',
            'middlename' => 'User',
            'lastname' => 'Example',
            'dob' => '1995-01-01',
            'email' => 'user@example.com',
            'password' =>'password',
            'role' => 'User',
        ]);

        $this->call([
            OragnizationsSeeder::class,
        ]);
    }
}
