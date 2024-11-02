<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Matakuliah::create([
            'kode_mk'=>'A3',
            'nama_mk'=>'Komputasi Awan',
            'sks'=>'3',
            'semester'=>'4',
        ]);
    }
}
