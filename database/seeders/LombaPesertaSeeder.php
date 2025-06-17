<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lomba;
use App\Models\User;

class LombaPesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userA = User::find(6); 
        $userB = User::find(7); 

        $lombaX = Lomba::find(1); 
        $lombaY = Lomba::find(1); 

        if ($userA && $lombaX) {
            $value = [
                'nama' => "Syahrial",
                'alamat' => "Bogor",
            ];

            $userA->lombas()->attach($lombaX->id, [
                'data_isian' => json_encode($value),
            ]);
        }

        if ($userB && $lombaX) {
            $value = [
                'nama' => "Hipdi",
                'alamat' => "Jakarta",
            ];

            $userB->lombas()->attach($lombaX->id, [
                'data_isian' => json_encode($value),
            ]);
        }

    }
}
