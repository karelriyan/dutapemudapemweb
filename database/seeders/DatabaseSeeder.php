<?php

namespace Database\Seeders;


use App\Models\Admin;
use App\Models\Lomba;
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
        $this->call([
            LombaSeeder::class,
            UserSeeder::class,
            LombaJuriSeeder::class,
            LombaPesertaSeeder::class,
        ]);
        

        // Lomba::create([
        // 'nama_lomba' => 'Pemuda Pelopor',
        // 'tahun' => '2025',
        // 'deskripsi' => 'Pemuda Pelopor 2025',
        // ]);
    }
}
