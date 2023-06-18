<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\pengguna;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // --- User ---- 
        pengguna::create([
            'nama' => "admin",
            'email' => "admin@mail.com",
            'username' => "admin",
            'password' => bcrypt(123)
        ]);
        
        pengguna::create([
            'nama' => "admin",
            'email' => "admin@mail.com",
            'username' => "admin",
            'password' => bcrypt(123)
        ]);


    }
}
