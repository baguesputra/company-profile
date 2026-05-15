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
        <h2 class="judul-layanan-unggulan">Informasi Kamar dan Bed</h2>
        <p class="deskripsi-layanan-unggulan">
           Berikut adalah informasi kamar dan jumlah bed yang tersedia di Rumah Sakit Amanah Medical Centre.
        </p>
    </div>
</section>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white text-center py-3">
                    <h4 class="mb-0"><i class="fas fa-bed me-2"></i>Informasi Ketersediaan Bed</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-0 fw-bold text-success py-3 px-4">Nama Ruangan</th>
                                    <th class="border-0 fw-bold text-success py-3 px-4">Sub Nama</th>
                                    <th class="border-0 fw-bold text-success py-3 px-4 text-center">Total Bed</th>
                                    <th class="border-0 fw-bold text-success py-3 px-4 text-center">Digunakan</th>
                                    <th class="border-0 fw-bold text-success py-3 px-4 text-center">Tersedia</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($beds as $bed)
                                    <tr class="bed-row" style="animation: fadeInUp 0.6s ease-out {{ $loop->index * 0.1 }}s both;">
                                        <td class="py-3 px-4 fw-semibold">{{ $bed->nama }}</td>
                                        <td class="py-3 px-4">{{ $bed->sub_nama }}</td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="badge bg-primary fs-6">{{ $bed->jumlah_total }}</span>
                                        </td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="badge bg-warning text-dark fs-6">{{ $bed->jumlah_used }}</span>
                                        </td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="badge bg-success fs-6">{{ $bed->jumlah_tersedia }}</span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5 text-muted">
                                            <i class="fas fa-info-circle fa-2x mb-3"></i>
                                            <br>Tidak ada data bed yang tersedia saat ini.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.bed-row:hover {
    background-color: #f8f9fa !important;
    transition: background-color 0.3s ease;
}

.card {
    border-radius: 15px;
    overflow: hidden;
}

.card-header {
    background: linear-gradient(135deg, #28a745, #20c997) !important;
    border: none;
}

.table th {
    border-top: none;
    font-size: 0.95rem;
}

.table td {
    vertical-align: middle;
    font-size: 0.9rem;
}

.badge {
    font-weight: 500;
    padding: 0.5em 0.75em;
}
</style>
@endsection
