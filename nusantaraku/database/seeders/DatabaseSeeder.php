<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Budaya;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\Province::factory(20)->create();
        User::create([
            'name' => 'Muhammad Zahran',
            'email' => 'muhammadzahran02@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1'),
        ]);
        Budaya::create([
            'category_name' => 'Masakan',
            'gambar' => 'null'
        ]);
        Budaya::create([
            'category_name' => 'Musik',
            'gambar' => 'null'
        ]);
        Budaya::create([
            'category_name' => 'Pakaian',
            'gambar' => 'null'
        ]);
        Budaya::create([
            'category_name' => 'Rumah Adat',
            'gambar' => 'null'
        ]);
        Budaya::create([
            'category_name' => 'Tarian',
            'gambar' => 'null'
        ]);
    }
}
