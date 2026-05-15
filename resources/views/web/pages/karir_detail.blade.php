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

/* Job Detail Section */
.job-detail-section {
    background-color: #f9f9f9;
    padding: 60px 20px;
    color: #333;
    font-family: 'Arial', sans-serif;
}

.job-detail-container {
    max-width: 1000px;
    margin: 0 auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    overflow: hidden;
}

.job-header {
    background: linear-gradient(135deg, #2a7f62, #1e5f4a);
    color: #fff;
    padding: 30px;
    text-align: center;
}

.job-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.job-meta {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.job-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.1rem;
}

.job-status {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 0.9rem;
}

.job-status.open {
    background-color: #28a745;
    color: #fff;
}

.job-status.closed {
    background-color: #dc3545;
    color: #fff;
}

.job-content {
    padding: 40px;
}

.job-description {
    margin-bottom: 30px;
}

.job-description h3 {
    color: #2a7f62;
    font-size: 1.5rem;
    margin-bottom: 15px;
    border-bottom: 2px solid #2a7f62;
    padding-bottom: 10px;
}

.job-description p {
    line-height: 1.7;
    color: #555;
    margin-bottom: 20px;
}

.requirements-list,
.responsibilities-list {
    background-color: #f8f9fa;
    border-left: 4px solid #2a7f62;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 0 8px 8px 0;
}

.requirements-list h4,
.responsibilities-list h4 {
    color: #2a7f62;
    font-size: 1.3rem;
    margin-bottom: 15px;
    font-weight: bold;
}

.requirements-list ul,
.responsibilities-list ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.requirements-list li,
.responsibilities-list li {
    padding: 8px 0;
    padding-left: 20px;
    position: relative;
    color: #555;
    line-height: 1.6;
}

.requirements-list li:before,
.responsibilities-list li:before {
    content: "✓";
    color: #2a7f62;
    font-weight: bold;
    position: absolute;
    left: 0;
}

.deadline-info {
    background-color: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 30px;
    text-align: center;
}

.deadline-info h4 {
    color: #856404;
    margin-bottom: 10px;
    font-size: 1.2rem;
}

.deadline-info p {
    color: #856404;
    margin: 0;
    font-weight: bold;
    font-size: 1.1rem;
}

.apply-section {
    text-align: center;
    padding: 30px;
    background-color: #f8f9fa;
    border-top: 1px solid #dee2e6;
}

.btn-apply {
    display: inline-block;
    padding: 15px 40px;
    background-color: #2a7f62;
    color: #fff;
    border: none;
    border-radius: 8px;
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(42, 127, 98, 0.3);
}

.btn-apply:hover {
    background-color: #1e5f4a;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(42, 127, 98, 0.4);
}

.btn-apply.disabled {
    background-color: #6c757d;
    cursor: not-allowed;
    box-shadow: none;
    transform: none;
}

.btn-back {
    display: inline-block;
    padding: 12px 30px;
    background-color: transparent;
    color: #2a7f62;
    border: 2px solid #2a7f62;
    border-radius: 8px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: bold;
    margin-left: 15px;
    transition: all 0.3s ease;
}

.btn-back:hover {
    background-color: #2a7f62;
    color: #fff;
    transform: translateY(-2px);
}
</style>

<section class="layanan-unggulan-hero">
    <div class="container">
        <h2 class="judul-layanan-unggulan">Detail Lowongan</h2>
        <p class="deskripsi-layanan-unggulan">
           Pelajari lebih lanjut tentang posisi yang tersedia di RS Amanah Medical Centre.
        </p>
    </div>
</section>

<section class="job-detail-section">
    <div class="container">
        <div class="job-detail-container">
            <div class="job-header">
                <h1 class="job-title">{{ $karir->title }}</h1>
                <div class="job-meta">
                    <div class="job-meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ $karir->location }}</span>
                    </div>
                    <div class="job-meta-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Diposting: {{ $karir->created_at->format('d M Y') }}</span>
                    </div>
                </div>
                <span class="job-status {{ $karir->status }}">
                    {{ $karir->status === 'open' ? 'Lowongan Terbuka' : 'Lowongan Ditutup' }}
                </span>
            </div>

            <div class="job-content">
                <div class="job-description">
                    <h3>Deskripsi Pekerjaan</h3>
                    <p>{{ $karir->description }}</p>
                </div>

                @if($karir->requirements)
                <div class="requirements-list">
                    <h4>Kualifikasi & Persyaratan</h4>
                    <ul>
                        @foreach(explode("\n", $karir->requirements) as $requirement)
                            @if(trim($requirement))
                                <li>{{ trim($requirement) }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($karir->responsibilities)
                <div class="responsibilities-list">
                    <h4>Tanggung Jawab</h4>
                    <ul>
                        @foreach(explode("\n", $karir->responsibilities) as $responsibility)
                            @if(trim($responsibility))
                                <li>{{ trim($responsibility) }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($karir->application_deadline)
                <div class="deadline-info">
                    <h4><i class="fas fa-clock"></i> Batas Waktu Pendaftaran</h4>
                    <p>{{ $karir->application_deadline->format('d F Y') }}</p>
                </div>
                @endif

                <div class="apply-section">
                    @if($karir->status === 'open')
                        <a href="mailto:hr@rsamanah.com?subject=Pelamar: {{ $karir->title }}" class="btn-apply">
                            <i class="fas fa-paper-plane"></i> Lamar Sekarang
                        </a>
                    @else
                        <button class="btn-apply disabled" disabled>
                            <i class="fas fa-times-circle"></i> Lowongan Ditutup
                        </button>
                    @endif
                    <a href="{{ route('web.karir') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Lowongan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>
@endsection
