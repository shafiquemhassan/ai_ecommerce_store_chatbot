<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::firstOrCreate([
            'email' => 'admin@admin.com',
        ], [
            'name' => 'Admin User',
            'username' => 'admin',
            'password' => Hash::make('password'),
        ]);

        // Standard User
        User::firstOrCreate([
            'email' => 'user@user.com',
        ], [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => Hash::make('password'),
        ]);
    }
}
