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
        // User::factory(10)->create();

        User::create([
            'rfid_number' => '1234567890',
            'first_name' => 'John',
            'middle_name' => 'Doe',
            'last_name' => 'Smith',
            'username' => 'test',
            'role' => 'admin',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'phone' => '1234567890',
            'status' => 'active',
        ]);

        // User::factory()->create([
        //     'rfid_number' => '1234567890',
        //     'first_name' => 'John',
        //     'middle_name' => 'Doe',
        //     'last_name' => 'Smith',
        //     'username' => 'test',
        //     'role' => 'admin',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password'),
        //     'phone' => '1234567890',
        //     'status' => 'active',
        // ]);
    }
}
