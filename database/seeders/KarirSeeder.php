<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Karir::create([
            'title' => 'Perawat ICU',
            'description' => 'Bergabunglah dengan tim perawat ICU kami untuk memberikan perawatan intensif kepada pasien kritis.',
            'location' => 'RS Amanah Medical Centre',
            'status' => 'open',
            'requirements' => '• Sarjana Keperawatan (S.Kep)\n• STR aktif\n• Sertifikat BLS dan ACLS\n• Pengalaman minimal 2 tahun di ICU\n• Kemampuan bekerja dalam tim',
            'responsibilities' => '• Memberikan perawatan intensif kepada pasien kritis\n• Monitoring kondisi pasien 24 jam\n• Kolaborasi dengan tim medis\n• Dokumentasi perawatan pasien',
            'application_deadline' => now()->addDays(30),
            'is_active' => true
        ]);

        \App\Models\Karir::create([
            'title' => 'Administrasi Rekam Medis',
            'description' => 'Posisi untuk mengelola dan memelihara rekam medis pasien dengan akurat dan efisien.',
            'location' => 'RS Amanah Medical Centre',
            'status' => 'closed',
            'requirements' => '• Diploma/Sarjana Administrasi\n• Pengalaman di bidang kesehatan minimal 1 tahun\n• Mahir menggunakan komputer dan software medis\n• Teliti dan bertanggung jawab',
            'responsibilities' => '• Mengelola arsip rekam medis pasien\n• Memastikan keakuratan data pasien\n• Menjaga kerahasiaan informasi medis\n• Koordinasi dengan departemen terkait',
            'application_deadline' => now()->addDays(15),
            'is_active' => true
        ]);

        \App\Models\Karir::create([
            'title' => 'IT Support',
            'description' => 'Bergabunglah dengan tim IT untuk mendukung infrastruktur teknologi informasi rumah sakit.',
            'location' => 'RS Amanah Medical Centre',
            'status' => 'open',
            'requirements' => '• Sarjana Teknik Informatika/Sistem Informasi\n• Pengalaman minimal 2 tahun di bidang IT\n• Pengetahuan jaringan dan server\n• Kemampuan troubleshooting hardware/software',
            'responsibilities' => '• Maintenance sistem IT rumah sakit\n• Troubleshooting hardware dan software\n• Support user dan training\n• Pengembangan sistem informasi',
            'application_deadline' => now()->addDays(45),
            'is_active' => true
        ]);

        \App\Models\Karir::create([
            'title' => 'Dokter Umum',
            'description' => 'Posisi untuk dokter umum yang berdedikasi dalam memberikan pelayanan kesehatan primer.',
            'location' => 'RS Amanah Medical Centre',
            'status' => 'open',
            'requirements' => '• STR dan SIP aktif\n• Sarjana Kedokteran (S.Ked)\n• Pengalaman klinis minimal 3 tahun\n• Kemampuan komunikasi yang baik',
            'responsibilities' => '• Pemeriksaan dan diagnosis pasien\n• Memberikan resep dan terapi\n• Konsultasi kesehatan\n• Koordinasi dengan spesialis',
            'application_deadline' => now()->addDays(60),
            'is_active' => true
        ]);

        \App\Models\Karir::create([
            'title' => 'Apoteker',
            'description' => 'Bergabunglah dengan tim farmasi untuk memastikan pengelolaan obat yang aman dan efektif.',
            'location' => 'RS Amanah Medical Centre',
            'status' => 'open',
            'requirements' => '• Sarjana Farmasi (S.Farm)\n• STR aktif\n• Pengalaman di apotek rumah sakit minimal 2 tahun\n• Pengetahuan tentang regulasi obat',
            'responsibilities' => '• Pengelolaan stok obat\n• Pelayanan resep\n• Konsultasi penggunaan obat\n• Monitoring efek samping obat',
            'application_deadline' => now()->addDays(30),
            'is_active' => true
        ]);
    }
}
