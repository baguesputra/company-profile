@extends('web.layouts.app')

@section('content')
<style>

.layanan-unggulan-hero {
    position: relative;
    background: url('../images/gedung_amc.jpg') no-repeat center center;
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
    color: #ffffffff;
}

h2.fw-bold {
    font-size: 28px;
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

<section id="poliklinik-obgyn" class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4 text-success fw-bold">Poliklinik Kebidanan dan Kandungan (Obgyn)</h2>
            <p class="text-center mb-5">
                Poliklinik Kebidanan dan Kandungan di Rumah Sakit Amanah Medical Centre menyediakan layanan kesehatan reproduksi wanita yang komprehensif. Kami menangani kehamilan, persalinan, kesehatan reproduksi, serta diagnosis dan pengobatan berbagai kondisi ginekologi. Tim dokter spesialis kami yang berpengalaman siap memberikan perawatan terbaik dengan fasilitas modern dan pendekatan yang penuh perhatian.
            </p>
        </div>
    </div>

    <div class="row g-4 justify-content-center">
        @php
            $dokterObgyn = [
                ['name' => 'Dr. Budi Pranata', 'image' => 'doktor3.jpg'],
            ];
        @endphp

        @foreach ($dokterObgyn as $dokter)
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('../images/' . $dokter['image']) }}" class="card-img-top" alt="{{ $dokter['name'] }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">{{ $dokter['name'] }}</h5>
                        <p class="card-text text-muted">Spesialis Kebidanan dan Kandungan</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <a href="/jadwal" class="btn btn-success btn-lg px-5 py-3">Lihat Jadwal Dokter</a>
        </div>
    </div>
</section>





    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const layananItems = document.querySelectorAll('.layanan-item');

    const revealOnScroll = () => {
        layananItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                item.classList.add('visible');
            }
        });
    };

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Untuk memastikan animasi saat load pertama
});

    </script>
@endsection
