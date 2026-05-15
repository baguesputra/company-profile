<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Doctor::create([
            'name' => 'dr. Abimanyu Sp.PD-KGEH FINASIM',
            'poli' => 'SPESIALIS PENYAKIT DALAM',
            'image' => 'doktor1.jpg',
            'link' => 'web.jadwal.dokter1',
        ]);

        \App\Models\Doctor::create([
            'name' => 'dr. Ali Assagaf Sp. P(K)',
            'poli' => 'SPESIALIS PARU',
            'image' => 'doktor2.jpg',
            'link' => 'web.jadwal.dokter1',
        ]);

        \App\Models\Doctor::create([
            'name' => 'dr. Agus Fitrian Noor Razak Sp.M(K)',
            'poli' => 'SPESIALIS MATA',
            'image' => 'doktor3.jpg',
            'link' => 'web.jadwal.dokter1',
        ]);

        \App\Models\Doctor::create([
            'name' => 'dr. Arif Nur Widodo Sp.PD K-GEH FINASIM',
            'poli' => 'SPESIALIS PENYAKIT DALAM',
            'image' => 'doktor4.jpg',
            'link' => 'web.jadwal.dokter1',
        ]);

        \App\Models\Doctor::create([
            'name' => 'drg. Adianto Prasetyo',
            'poli' => 'SPESIALIS GIGI',
            'image' => 'doktor5.jpg',
            'link' => 'web.jadwal.dokter1',
        ]);

        \App\Models\Doctor::create([
            'name' => 'DR. dr. Achmad Rofi`i Sp.THT-KL',
            'poli' => 'SPESIALIS TELINGA HIDUNG & TENGGOROKAN',
            'image' => 'doktor6.jpg',
            'link' => 'web.jadwal.dokter1',
        ]);
    }
}
