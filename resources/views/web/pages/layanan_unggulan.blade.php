@extends('web.layouts.app')

@section('content')
<section class="layanan-unggulan-hero">
   <div class="container">
        <h2 class="judul-layanan-unggulan">Layanan Unggulan</h2>
        <p class="deskripsi-layanan-unggulan">
            Rumah Sakit Amanah Medical Centre menghadirkan layanan unggulan dengan fasilitas modern 
            dan tenaga medis profesional untuk memberikan pelayanan terbaik kepada pasien.
        </p>
    </div>
</section> 
<section class="page-service-section py-5" aria-labelledby="layanan-unggulan-heading">
        <div class="container">

            <div class="row g-4 page-service-grid">
                @php
                    $items = [
                        [
                            'icon' => 'eye_center.jpg',
                            'title' => 'Eye Center',
                            'desc' => 'Kesehatan mata terintegrasi dari pemeriksaan rutin hingga tindakan bedah.',
                            'route' => 'web.layanan_unggulan.eye_center',
                        ],
                        [
                            'icon' => 'radiologi.jpg',
                            'title' => 'One Day Care',
                            'desc' => 'Perawatan medis dalam satu hari — pasien dapat pulang di hari yang sama.',
                            'route' => 'web.layanan_unggulan.one_day_care',
                        ],
                        [
                            'icon' => 'cardiovascular.jpg',
                            'title' => 'Cardiovascular',
                            'desc' => 'Pelayanan jantung dan pembuluh darah bersama tim spesialis.',
                            'route' => 'web.layanan_unggulan.cardiovascular',
                        ],
                        [
                            'icon' => 'aesthetic.jpg',
                            'title' => 'Aesthetic Center',
                            'desc' => 'Perawatan estetika medis dengan pendekatan aman dan profesional.',
                            'route' => 'web.layanan_unggulan.aesthetic_center',
                        ],
                        [
                            'icon' => 'mcu.jpg',
                            'title' => 'Medical Check Up (MCU)',
                            'desc' => 'Pemeriksaan kesehatan menyeluruh untuk deteksi dini dan profil risiko.',
                            'route' => 'web.layanan_unggulan.medical_check_up_(mcu)',
                        ],
                        [
                            'icon' => 'ivf.jpg',
                            'title' => 'Fertilisasi In Vitro (IVF)',
                            'desc' => 'Layanan reproduksi berbantu dengan pendampingan multidisiplin.',
                            'route' => 'web.layanan_unggulan.fertilisasi_in_vitro_(ivf)',
                        ],
                        [
                            'icon' => 'ok.jpg',
                            'title' => 'Ruang OK (Operating Room)',
                            'desc' => 'Ruang operasi steril dengan standar keselamatan dan infeksi yang ketat.',
                            'route' => 'web.layanan_unggulan.ruang_ok_(operating_room)',
                        ],
                        [
                            'icon' => 'cathlab.jpg',
                            'title' => 'Cathlab',
                            'desc' => 'Kateterisasi jantung untuk diagnosis dan intervensi tersalur.',
                            'route' => 'web.layanan_unggulan.cathlab',
                        ],
                        [
                            'icon' => 'hd.jpg',
                            'title' => 'Hemodialisis Centre',
                            'desc' => 'Unit hemodialisis dengan monitoring dan protokol terstandarisasi.',
                            'route' => 'web.layanan_unggulan.hemodialisis_centre',
                        ],
                        [
                            'icon' => 'rehab.jpg',
                            'title' => 'Physical Rehabilitation Centre',
                            'desc' => 'Pemulihan fungsi fisik pasca cedera, operasi, atau penyakit kronis.',
                            'route' => 'web.layanan_unggulan.physical_rehabilitation_centre',
                        ],
                        [
                            'icon' => 'maternity.jpg',
                            'title' => 'Maternity Centre',
                            'desc' => 'Perjalanan kehamilan, persalinan, dan perawatan nifas terpadu.',
                            'route' => 'web.layanan_unggulan.maternity_centre',
                        ],
                        [
                            'icon' => 'gastro.jpg',
                            'title' => 'Gastroenterohepatology Centre',
                            'desc' => 'Diagnosis dan penanganan saluran cerna serta organ hati.',
                            'route' => 'web.layanan_unggulan.gastroenterohepatology_centre',
                        ],
                        [
                            'icon' => 'laboratorium.jpg',
                            'title' => 'Radiodiagnostik dan Laboratorium',
                            'desc' => 'Pencitraan medis dan laboratorium klinik mendukung diagnosis tepat.',
                            'route' => 'web.layanan_unggulan.radiodiagnostik_dan_laboratorium',
                        ],
                    ];
                @endphp

                @foreach ($items as $index => $item)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ min($index * 40, 320) }}">
                        <a href="{{ route($item['route']) }}" class="page-service-card">
                            <div class="page-service-card__media">
                                <img
                                    src="{{ asset('../images/layanan_unggulan/' . $item['icon']) }}"
                                    alt="{{ $item['title'] }}"
                                    loading="lazy"
                                    decoding="async"
                                    width="640"
                                    height="400"
                                >
                            </div>
                            <div class="page-service-card__body d-flex flex-column flex-grow-1">
                                <h3 class="page-service-card__title h5 mb-2">{{ $item['title'] }}</h3>
                                <p class="page-service-card__desc mb-0">{{ $item['desc'] }}</p>
                                <span class="page-service-card__cta">
                                    Selengkapnya
                                    <i class="bi bi-arrow-right-short fs-5" aria-hidden="true"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
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
