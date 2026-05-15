@extends('web.layouts.app')

@section('content')
<style>
/* Hero Section */
.layanan-unggulan-hero {
    position: relative;
    background: url('../public/images/gedung_amc.jpg') no-repeat center center;
    background-size: cover;
    min-height: 300px;
    color: #fff;
    padding: 80px 20px;
}

.layanan-unggulan-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(211, 119, 57, 0.83); /* overlay orange transparan */
}

.layanan-unggulan-hero .container {
    position: relative;
    z-index: 2;
}

.judul-layanan-unggulan {
    font-size: 2.5rem;
    font-weight: 700;
    color :#fff;
}

.deskripsi-layanan-unggulan {
    font-size: 1.2rem;
    margin: 0 auto;
    color: #fff;
}

/* Service Cards */
.layanan-card {
    padding: 30px 20px;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 4px 18px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
}

.layanan-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 28px rgba(0,0,0,0.12);
    background: linear-gradient(135deg, #ffffff, #f9fcf9);
}

.icon-wrapper {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    border-radius: 50%;
    background: rgba(0, 155, 77, 0.08); /* soft green background */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transition: background 0.3s ease;
}

.layanan-card:hover .icon-wrapper {
    background: rgba(255, 127, 0, 0.12); /* orange accent */
}

.icon-wrapper img {
    max-height: 60px;
    transition: transform 0.3s ease;
}

.layanan-card:hover .icon-wrapper img {
    transform: scale(1.1);
}

.layanan-card h5 {
    color: #007b3f;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.layanan-card:hover h5 {
    color: #ff7f00;
}

/* Section Karir */
.karir-section {
    background-color: #f9f9f9;
    padding: 60px 20px;
    color: #333;
    font-family: 'Arial', sans-serif;
}

.section-title {
    font-size: 2.2rem;
    font-weight: bold;
    color: #2a7f62; /* Hijau Amanah */
    position: relative;
    margin-bottom: 10px;
}

.section-title::after {
    content: '';
    width: 50px;
    height: 3px;
    background-color: #2a7f62;
    display: block;
    margin: 10px auto;
    border-radius: 2px;
}

.subtitle {
    font-size: 1rem;
    color: #666;
    margin-bottom: 30px;
}

/* Daftar Lowongan */
.job-list {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.job-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.job-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2a7f62;
    margin-bottom: 5px;
}

.job-location {
    font-size: 0.9rem;
    color: #777;
    margin-bottom: 10px;
}

.job-status {
    font-weight: bold;
    margin-bottom: 15px;
}

.job-status.open {
    color: #2a7f62;
}

.job-status.closed {
    color: #d9534f;
}

/* Tombol Detail */
.btn-detail {
    display: inline-block;
    padding: 10px 20px;
    background-color: #2a7f62;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    font-weight: bold;
}

.btn-detail:hover {
    background-color: #1e5f4a;
}

.btn-detail.disabled {
    background-color: #cccccc;
    cursor: not-allowed;
    pointer-events: none;
}



</style>
<section class="layanan-unggulan-hero">
    <div class="container">
        <h2 class="judul-layanan-unggulan">Prosedur Pendaftaran</h2>
        <p class="deskripsi-layanan-unggulan">
           Panduan lengkap untuk mendaftarkan diri sebagai pasien di Rumah Sakit Amanah Medical Centre. Ikuti langkah-langkah berikut untuk proses yang mudah dan cepat.
        </p>
    </div>
</section>
<section class="prosedur-pendaftaran-section py-5">
    <div class="container">
        <!-- Video Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Video Panduan Pendaftaran</h3>
                        <div class="ratio ratio-16x9">
                            <video controls class="w-100">
                                <source src="{{ asset('../videos/PERALATAN MEDIS AMANAH MEDICAL CENTRE.mp4') }}" type="video/mp4">
                                Browser Anda tidak mendukung pemutaran video.
                            </video>
                        </div>
                        <p class="text-muted mt-3 text-center">Tonton video di atas untuk panduan visual lengkap proses pendaftaran.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Guide -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title mb-0 text-white">Langkah-Langkah Pendaftaran</h3>
                    </div>
                    <div class="card-body">
                        <div class="step-container">
                            <div class="step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h5>Persiapan Dokumen</h5>
                                    <p>Siapkan Kartu Identitas (KTP/KK/Paspor), Kartu BPJS (jika ada), dan surat rujukan dari dokter (untuk rawat jalan spesialis).</p>
                                </div>
                            </div>

                            <div class="step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h5>Datang ke Loket Pendaftaran</h5>
                                    <p>Datanglah ke loket pendaftaran di lantai dasar rumah sakit. Buka pukul 07.00 - 21.00 WIB setiap hari.</p>
                                </div>
                            </div>

                            <div class="step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h5>Isi Formulir Pendaftaran</h5>
                                    <p>Petugas akan memberikan formulir pendaftaran. Isilah dengan data yang lengkap dan benar.</p>
                                </div>
                            </div>

                            <div class="step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h5>Pembayaran dan Verifikasi</h5>
                                    <p>Lakukan pembayaran administrasi sesuai jenis layanan. Tunggu verifikasi data oleh petugas.</p>
                                </div>
                            </div>

                            <div class="step">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h5>Ambil Nomor Antrian</h5>
                                    <p>Setelah verifikasi, Anda akan mendapat nomor antrian dan kartu pasien sementara.</p>
                                </div>
                            </div>

                            <div class="step">
                                <div class="step-number">6</div>
                                <div class="step-content">
                                    <h5>Menunggu Panggilan</h5>
                                    <p>Tunggu di ruang tunggu sesuai nomor antrian. Monitor layar informasi untuk update antrian.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0 text-white">Pendaftaran Online</h5>
                    </div>
                    <div class="card-body">
                        <p>Untuk memudahkan, Anda dapat melakukan pendaftaran awal melalui aplikasi mobile atau website resmi kami. Kunjungi <a href="#" class="text-primary">www.amc-hospital.com</a> untuk informasi lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="card-title mb-0 text-white">Kontak Darurat</h5>
                    </div>
                    <div class="card-body">
                        <p>Jika Anda membutuhkan bantuan segera, hubungi:</p>
                        <ul>
                            <li><strong>Emergency:</strong> 0511-7903699</li>
                            <li><strong>Informasi:</strong> 0511-7903699</li>
                            <li><strong>WhatsApp:</strong> 0812-3456-7890</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <!-- <div class="text-center mt-5">
            <p class="text-muted">Butuh bantuan lebih lanjut? Kunjungi kami di Jln. Mt. Haryono, Kerta Baru Hilir, Banjarmasin atau hubungi layanan pelanggan kami.</p>
            <a href="{{ route('web.dashboard') }}" class="btn btn-success btn-lg">Kembali ke Beranda</a>
        </div> -->
    </div>
</section>

<style>
.step-container {
    position: relative;
}

.step {
    display: flex;
    margin-bottom: 30px;
    align-items: flex-start;
}

.step-number {
    width: 40px;
    height: 40px;
    background-color: #28a745;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-right: 20px;
    flex-shrink: 0;
}

.step-content h5 {
    color: #28a745;
    margin-bottom: 10px;
}

.step-content p {
    margin: 0;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .step {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .step-number {
        margin-bottom: 10px;
        margin-right: 0;
    }
}
</style>
@endsection
