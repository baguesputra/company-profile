<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Promo::create([
            'title' => 'Medical Check-Up Komprehensif',
            'description' => 'Paket pemeriksaan kesehatan lengkap termasuk tes darah, EKG, dan konsultasi dokter spesialis.',
            'image' => 'mcu-promo.jpg',
            'price' => 750000,
            'valid_until' => '2025-12-31',
            'is_active' => true,
        ]);

        \App\Models\Promo::create([
            'title' => 'Vaksinasi Lengkap',
            'description' => 'Paket vaksinasi untuk keluarga dengan harga spesial. Termasuk vaksin COVID-19, Influenza, dan Hepatitis.',
            'image' => 'vaksinasi-promo.jpg',
            'price' => 500000,
            'valid_until' => '2025-11-30',
            'is_active' => true,
        ]);

        \App\Models\Promo::create([
            'title' => 'Perawatan Gigi & Bedah Mulut',
            'description' => 'Diskon 30% untuk perawatan gigi lengkap, scaling, dan konsultasi spesialis bedah mulut.',
            'image' => 'dental-promo.jpg',
            'price' => 300000,
            'valid_until' => '2025-12-15',
            'is_active' => true,
        ]);

        \App\Models\Promo::create([
            'title' => 'Eye Center Check-Up',
            'description' => 'Pemeriksaan mata komprehensif dengan teknologi terkini dan konsultasi spesialis mata.',
            'image' => 'eye-center-promo.jpg',
            'price' => 400000,
            'valid_until' => '2025-12-20',
            'is_active' => true,
        ]);

        \App\Models\Promo::create([
            'title' => 'Cardiovascular Screening',
            'description' => 'Paket screening jantung lengkap termasuk EKG, Echo, dan konsultasi kardiologis.',
            'image' => 'cardiovascular-promo.jpg',
            'price' => 600000,
            'valid_until' => '2025-12-25',
            'is_active' => true,
        ]);

        \App\Models\Promo::create([
            'title' => 'Maternity Care Package',
            'description' => 'Paket perawatan kehamilan lengkap dari trimester pertama hingga persalinan.',
            'image' => 'maternity-promo.jpg',
            'price' => 2500000,
            'valid_until' => '2025-12-31',
            'is_active' => true,
        ]);
    }
}
