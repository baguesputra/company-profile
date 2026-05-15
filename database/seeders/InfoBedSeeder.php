<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoBedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Info_bed::create([
            'nama' => 'Kamar VIP',
            'sub_nama' => 'VIP A',
            'jumlah' => 10,
        ]);

        \App\Models\Info_bed::create([
            'nama' => 'Kamar Kelas 1',
            'sub_nama' => 'Kelas 1A',
            'jumlah' => 20,
        ]);

        \App\Models\Info_bed::create([
            'nama' => 'Kamar Kelas 2',
            'sub_nama' => 'Kelas 2A',
            'jumlah' => 30,
        ]);

        \App\Models\Info_bed::create([
            'nama' => 'Kamar Kelas 3',
            'sub_nama' => 'Kelas 3A',
            'jumlah' => 40,
        ]);
    }
}
