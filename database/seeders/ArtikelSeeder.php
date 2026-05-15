<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Artikel::create([
            'title' => 'Pentingnya Medical Check-Up Rutin',
            'description' => 'Medical Check-Up (MCU) adalah pemeriksaan kesehatan secara menyeluruh yang dilakukan secara berkala untuk mendeteksi dini berbagai penyakit.',
            'content' => 'Medical Check-Up (MCU) merupakan salah satu langkah pencegahan yang sangat penting dalam menjaga kesehatan. Dengan melakukan MCU secara rutin, kita dapat mendeteksi dini berbagai penyakit seperti diabetes, hipertensi, kolesterol tinggi, dan bahkan kanker. Pemeriksaan ini meliputi tes darah, urine, EKG, rontgen dada, dan konsultasi dengan dokter spesialis. Amanah Medical Centre menyediakan paket MCU lengkap dengan harga terjangkau dan fasilitas modern.',
            'image' => 'mcu.jpg',
            'published_date' => now()->toDateString(),
            'is_active' => true,
        ]);

        \App\Models\Artikel::create([
            'title' => 'Gejala Jantung yang Perlu Diwaspadai',
            'description' => 'Mengenali gejala penyakit jantung sejak dini dapat menyelamatkan nyawa. Simak tanda-tanda yang perlu Anda ketahui.',
            'content' => 'Penyakit jantung merupakan salah satu penyebab kematian tertinggi di Indonesia. Gejala yang sering muncul meliputi nyeri dada, sesak napas, palpitasi, kelelahan berlebihan, dan pembengkakan pada kaki. Faktor risiko seperti merokok, hipertensi, diabetes, dan pola makan tidak sehat dapat meningkatkan risiko terkena penyakit ini. Lakukan pemeriksaan jantung secara rutin dan konsultasikan dengan dokter spesialis jantung di Amanah Medical Centre.',
            'image' => 'gejala-jantung.webp',
            'published_date' => now()->subDays(1)->toDateString(),
            'is_active' => true,
        ]);

        \App\Models\Artikel::create([
            'title' => 'Tips Menjaga Pola Sehat di Era Digital',
            'description' => 'Dalam era digital saat ini, menjaga kesehatan fisik dan mental menjadi tantangan tersendiri. Berikut tips praktisnya.',
            'content' => 'Era digital membawa banyak kemudahan namun juga risiko kesehatan seperti mata lelah, postur tubuh yang buruk, dan stres. Untuk menjaga kesehatan, lakukan olahraga minimal 30 menit per hari, istirahatkan mata setiap 20 menit saat bekerja di depan komputer, konsumsi makanan sehat, dan kelola stres dengan meditasi atau hobi. Amanah Medical Centre siap membantu Anda dengan program kesehatan holistik yang terintegrasi.',
            'image' => 'tips-menjaga-pola-sehat.webp',
            'published_date' => now()->subDays(2)->toDateString(),
            'is_active' => true,
        ]);

        \App\Models\Artikel::create([
            'title' => 'Manfaat Olahraga untuk Kesehatan Mental',
            'description' => 'Olahraga tidak hanya baik untuk tubuh, tetapi juga sangat bermanfaat untuk kesehatan mental dan psikologis.',
            'content' => 'Olahraga teratur dapat meningkatkan produksi endorfin yang dikenal sebagai hormon kebahagiaan, mengurangi stres, meningkatkan kualitas tidur, dan meningkatkan kepercayaan diri. Jenis olahraga yang direkomendasikan meliputi jalan kaki, jogging, yoga, dan renang. Mulailah dengan olahraga ringan dan konsisten. Konsultasikan dengan dokter sebelum memulai program olahraga, terutama jika Anda memiliki kondisi kesehatan tertentu.',
            'image' => 'olahraga-mental.jpg',
            'published_date' => now()->subDays(3)->toDateString(),
            'is_active' => true,
        ]);

        \App\Models\Artikel::create([
            'title' => 'Pentingnya Vaksinasi untuk Semua Usia',
            'description' => 'Vaksinasi bukan hanya untuk anak-anak, tetapi juga penting untuk orang dewasa dan lansia.',
            'content' => 'Vaksinasi membantu tubuh membangun kekebalan terhadap berbagai penyakit menular. Untuk orang dewasa, vaksinasi influenza, pneumokokus, dan hepatitis sangat dianjurkan. Vaksin COVID-19 juga masih penting untuk menjaga kekebalan komunitas. Amanah Medical Centre menyediakan layanan vaksinasi lengkap dengan jadwal yang fleksibel dan harga terjangkau. Jangan tunda vaksinasi demi kesehatan Anda dan keluarga.',
            'image' => 'vaksinasi.jpg',
            'published_date' => now()->subDays(4)->toDateString(),
            'is_active' => true,
        ]);
    }
}
