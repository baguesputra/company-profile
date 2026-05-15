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
    padding: 15px;
    border-radius: 15px;
    background: #fff;
    box-shadow: 0 4px 18px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.layanan-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    background: linear-gradient(135deg, #ffffff, #f9fcf9);
}

.layanan-card .card-image {
    width: 100%;
    height: 120px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 15px;
    position: relative;
}

.layanan-card .card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.layanan-card:hover .card-image img {
    transform: scale(1.05);
}

.layanan-card h5 {
    color: #007b3f;
    margin-bottom: 8px;
    font-size: 1rem;
    transition: color 0.3s ease;
    flex-grow: 1;
}

.layanan-card:hover h5 {
    color: #ff7f00;
}

.layanan-card p {
    font-size: 0.85rem;
    line-height: 1.4;
    margin-bottom: 0;
}
</style>

<section class="layanan-unggulan-hero">
   <div class="container">
        <h2 class="judul-layanan-unggulan">Rawat Jalan</h2>
        <p class="deskripsi-layanan-unggulan">
            Rumah Sakit Amanah Medical Centre menghadirkan layanan unggulan dengan fasilitas modern 
            dan tenaga medis profesional untuk memberikan pelayanan terbaik kepada pasien.
        </p>
    </div>
</section> 

<section id="spesialis-medik" class="container my-5">
    <div class="row g-4">
        @php
            $spesialisMedik = [
                ['Poliklinik Obgyn', 'fa-baby', 'rawat-jalan/rj_obgyn'],
                ['Poliklinik Anak', 'fa-child', 'rawat-jalan/rj_anak'],
                ['Poliklinik Bedah', 'fa-scalpel', 'rawat-jalan/rj_bedah'],
                ['Poliklinik Bedah Digestive', 'fa-utensils', 'rawat-jalan/rj_bedah_digestive'],
                ['Poliklinik THT', 'fa-deaf', 'rawat-jalan/rj_tht'],
                ['Poliklinik Saraf', 'fa-brain', 'rawat-jalan/rj_saraf'],
                ['Poliklinik Paru', 'fa-lungs', 'rawat-jalan/rj_paru'],
                ['Poliklinik Urologi', 'fa-procedures', 'rawat-jalan/rj_urologi'],
                ['Poliklinik Penyakit Dalam', 'fa-heartbeat', 'rawat-jalan/rj_penyakit_dalam'],
                ['Poliklinik Anastesi', 'fa-syringe', 'rawat-jalan/rj_anastesi'],
                ['Poliklinik Gizi Klinik', 'fa-apple-alt', 'rawat-jalan/rj_gizi'],
                ['Poliklinik Andrologi', 'fa-mars', 'rawat-jalan/rj_andrologi'],
                ['Poliklinik Eksekutif', 'fa-user-tie', 'rawat-jalan/rj_eksekutif'],
                ['Poliklinik Gigi dan Bedah Mulut', 'fa-tooth', 'rawat-jalan/rj_gigi'],
                ['Poliklinik Kesehatan Jiwa', 'fa-smile', 'rawat-jalan/rj_kesehatan_jiwa'],
                ['Poliklinik Orthopedi', 'fa-bone', 'rawat-jalan/rj_orthopedi'],
            ];
        @endphp

        @foreach ($spesialisMedik as $spesialis)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ url($spesialis[2]) }}" class="text-decoration-none d-block h-100">
                    <div class="spesialis-card text-center p-4 shadow-sm rounded-3 bg-white h-100">
                        <div class="icon-circle mb-3 mx-auto">
                            <i class="fas {{ $spesialis[1] }} fa-lg text-success"></i>
                        </div>
                        <h6 class="fw-semibold text-dark mb-0">{{ $spesialis[0] }}</h6>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>

@endsection
