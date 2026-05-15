<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KritikSaran;

class KritikSaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KritikSaran::create([
            'nama' => 'Ahmad Rahman',
            'email' => 'ahmad.rahman@example.com',
            'telepon' => '081234567890',
            'kritik' => 'Pelayanan di rumah sakit ini sangat lambat. Saya menunggu lebih dari 2 jam untuk mendapatkan antrian dokter.',
            'saran' => 'Harus ada sistem antrian yang lebih efisien dan informasi yang lebih jelas tentang waktu tunggu.',
            'jenis' => 'keduanya',
            'status' => 'pending',
        ]);

        KritikSaran::create([
            'nama' => 'Siti Nurhaliza',
            'email' => 'siti.nurhaliza@example.com',
            'telepon' => '081987654321',
            'kritik' => null,
            'saran' => 'Tambahkan lebih banyak dokter spesialis jantung karena antrian selalu penuh.',
            'jenis' => 'saran',
            'status' => 'dibaca',
        ]);

        KritikSaran::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi.santoso@example.com',
            'telepon' => null,
            'kritik' => 'Fasilitas parkir sangat terbatas dan sering terjadi kemacetan.',
            'saran' => null,
            'jenis' => 'kritik',
            'status' => 'ditanggapi',
        ]);

        KritikSaran::create([
            'nama' => 'Maya Sari',
            'email' => 'maya.sari@example.com',
            'telepon' => '081345678901',
            'kritik' => 'Ruangan tunggu kurang bersih dan bau.',
            'saran' => 'Perbaiki sistem kebersihan dan tambahkan ventilasi yang lebih baik.',
            'jenis' => 'keduanya',
            'status' => 'pending',
        ]);

        KritikSaran::create([
            'nama' => 'Rizki Pratama',
            'email' => 'rizki.pratama@example.com',
            'telepon' => '081234567891',
            'kritik' => null,
            'saran' => 'Buat aplikasi mobile untuk pendaftaran online dan tracking antrian.',
            'jenis' => 'saran',
            'status' => 'dibaca',
        ]);
    }
}
