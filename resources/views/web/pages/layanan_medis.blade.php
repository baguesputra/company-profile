@extends('web.layouts.app')

@section('content')
<section class="layanan-unggulan-hero">
    <div class="container">
        <h2 class="judul-layanan-unggulan">Layanan Rumah Sakit</h2>
        <p class="deskripsi-layanan-unggulan">
            Rumah Sakit Amanah Medical Centre menghadirkan layanan unggulan dengan fasilitas modern
            dan tenaga medis profesional untuk memberikan pelayanan terbaik kepada pasien.
        </p>
    </div>
</section>

<section class="page-service-section py-5" aria-labelledby="layanan-medis-heading">
        <div class="container">
          

            <div class="row g-4 page-service-grid">
                @php
                    $items = [
                        [
                            'icon' => 'igd.jpg',
                            'title' => 'Instalasi Gawat Darurat (IGD)',
                            'desc' => 'Pelayanan darurat 24 jam. Untuk kondisi mendesak, hubungi nomor IGD.',
                            'href' => 'tel:+625117903699',
                            'cta' => 'Hubungi IGD',
                        ],
                        [
                            'icon' => 'rajal.jpg',
                            'title' => 'Rawat jalan',
                            'desc' => 'Poliklinik spesialis untuk konsultasi dan tindak lanjut tanpa menginap.',
                            'href' => route('web.rawat_jalan'),
                            'cta' => 'Lihat poliklinik',
                        ],
                        [
                            'icon' => 'ranap.jpg',
                            'title' => 'Rawat inap',
                            'desc' => 'Perawatan menginap dengan fasilitas kamar dan pendampingan tim medis.',
                            'href' => route('web.rawat_inap'),
                            'cta' => 'Informasi rawat inap',
                        ],
                        [
                            'icon' => 'unggulan.jpg',
                            'title' => 'Layanan unggulan',
                            'desc' => 'Sentra kesehatan khusus seperti MCU, cathlab, hemodialisis, dan lainnya.',
                            'href' => route('web.layanan_unggulan'),
                            'cta' => 'Jelajahi layanan',
                        ],
                        [
                            'icon' => 'penunjang.jpg',
                            'title' => 'Penunjang medis',
                            'desc' => 'Radiologi, laboratorium, dan pemeriksaan penunjang untuk diagnosis akurat.',
                            'href' => route('web.layanan_unggulan.radiodiagnostik_dan_laboratorium'),
                            'cta' => 'Radiodiagnostik & lab',
                        ],
                    ];
                @endphp

                @foreach ($items as $index => $item)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ min($index * 80, 400) }}">
                        <a
                            href="{{ $item['href'] }}"
                            class="page-service-card"
                            @if (str_starts_with($item['href'], 'tel:')) aria-label="{{ $item['title'] }} — {{ $item['cta'] }}" @endif
                        >
                            <div class="page-service-card__media">
                                <img
                                    src="{{ asset('../images/layanan_medis/' . $item['icon']) }}"
                                    alt="{{ $item['title'] }}"
                                    loading="{{ $index < 2 ? 'eager' : 'lazy' }}"
                                    decoding="async"
                                    width="640"
                                    height="400"
                                >
                            </div>
                            <div class="page-service-card__body d-flex flex-column flex-grow-1">
                                <h3 class="page-service-card__title h5 mb-2">{{ $item['title'] }}</h3>
                                <p class="page-service-card__desc mb-0">{{ $item['desc'] }}</p>
                                <span class="page-service-card__cta">
                                    {{ $item['cta'] }}
                                    <i class="bi bi-arrow-right-short fs-5" aria-hidden="true"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
