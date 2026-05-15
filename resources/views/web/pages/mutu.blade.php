@extends('web.layouts.app')

@section('content')
<section class="layanan-unggulan-hero">
   <div class="container">
        <h2 class="judul-layanan-unggulan">Indikator Mutu Nasional</h2>
        <p class="deskripsi-layanan-unggulan">
            Rumah Sakit Amanah Medical Centre menghadirkan layanan unggulan dengan fasilitas modern 
            dan tenaga medis profesional untuk memberikan pelayanan terbaik kepada pasien.
        </p>
    </div>
</section> 
 @php
        $mutuRows = [
            ['judul' => 'Kepatuhan kebersihan tangan', 'standar' => '≥ 85 %', 'capaian' => ['55.1 %', '87%', '89%', '89%']],
            ['judul' => 'Kepatuhan penggunaan alat pelindungan diri (APD)', 'standar' => '100 %', 'capaian' => ['100 %', '97%', '98%', '99%']],
            ['judul' => 'Kepatuhan identifikasi pasien', 'standar' => '100 %', 'capaian' => ['100 %', '100%', '100%', '100%']],
            ['judul' => 'Waktu tanggap operasi seksio sesarea emergensi', 'standar' => '100 %', 'capaian' => ['*', '*', '*', '*']],
            ['judul' => 'Waktu tunggu rawat jalan &lt; 1 jam', 'standar' => '≥ 85 %', 'capaian' => ['94 %', '94%', '96%', '90%']],
            ['judul' => 'Penundaan operasi elektif', 'standar' => '≤ 5 %', 'capaian' => ['*', '0%', '0%', '0%']],
            ['judul' => 'Kepatuhan waktu visite dokter', 'standar' => '≥ 80 %', 'capaian' => ['85 %', '78%', '74%', '99%']],
            ['judul' => 'Pelaporan hasil kritis laboratorium', 'standar' => '100 %', 'capaian' => ['100 %', '100%', '—', '100%']],
            ['judul' => 'Kepatuhan penggunaan formularium nasional', 'standar' => '≥ 80 %', 'capaian' => ['**', '34%', '100%', '99%']],
            ['judul' => 'Kepatuhan terhadap clinical pathway', 'standar' => '≥ 80 %', 'capaian' => ['**', '40%', '56%', '100%']],
            ['judul' => 'Kepatuhan upaya pencegahan risiko jatuh', 'standar' => '100 %', 'capaian' => ['100 %', '100 %', '100 %', '100%']],
            ['judul' => 'Kecepatan waktu tanggap complain', 'standar' => '≥ 80 %', 'capaian' => ['100 %', '100 %', '100 %', '100%']],
            ['judul' => 'Kepuasan pasien dan keluarga', 'standar' => '≥ 80 %', 'capaian' => ['90 %', '96%', '97%', '96.56%']],
        ];
        $monthLabels = ['Agustus', 'September', 'Oktober', 'November'];
    @endphp

    <section class="mutu-indicators-section py-5" aria-labelledby="mutu-table-heading">
        <div class="container">
           

            <div class="mutu-table-card">
                <div class="mutu-table-scroll rounded-top">
                    <table class="mutu-table table align-middle caption-top">
                        <caption class="px-3 pt-3 pb-2 text-muted small">
                            Indikator berikut diperbarui sesuai pelaporan internal RS AMC · empat kolom bulan terakhir yang tercatat
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="mutu-table__col-no">No</th>
                                <th scope="col" class="mutu-table__col-title">Indikator</th>
                                <th scope="col" class="mutu-table__col-std">Standar</th>
                                @foreach ($monthLabels as $label)
                                    <th scope="col" class="mutu-table__col-month text-center text-nowrap">{{ $label }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mutuRows as $row)
                                <tr class="mutu-table__row">
                                    <td class="text-center fw-semibold">{{ $loop->iteration }}</td>
                                    <td class="mutu-table__title">{{ $row['judul'] }}</td>
                                    <td class="mutu-table__standar text-nowrap">{{ $row['standar'] }}</td>
                                    @foreach ($row['capaian'] as $cell)
                                        @php
                                            $t = trim($cell);
                                            $isSpecial = in_array($t, ['*', '**'], true) || in_array($t, ['—', '-', '−'], true);
                                        @endphp
                                        <td class="mutu-table__value text-center @if ($isSpecial) mutu-table__value--muted @endif">{{ $cell }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="mutu-table-meta border-top px-3 py-3 bg-light rounded-bottom">
                    <p class="small text-muted fw-semibold mb-2 mb-md-3">Keterangan simbol:</p>
                    <ul class="mutu-table-legend list-unstyled small text-muted mb-0 row g-2">
                        <li class="col-12 col-md-6"><span class="badge mutu-symbol">*</span> Data belum dilaporkan / tidak berlaku periode tersebut</li>
                        <li class="col-12 col-md-6"><span class="badge mutu-symbol">**</span> Perlu narasi pendukung atau data pelengkap dari unit terkait</li>
                        <li class="col-12"><span class="badge mutu-symbol">—</span> Tidak ada data atau tidak diukur untuk bulan tersebut</li>
                    </ul>
                </footer>
            </div>

            <header class="text-center mt-5 pt-3 pb-4">
                <h2 class="h4 fw-bold text-success-emphasis mb-2">Grafik indikator mutu nasional</h2>
                <p class="text-muted small mb-0 col-lg-8 mx-auto">Visual trend per indikator; klik atau zoom gambar untuk detail pada perangkat yang mendukung.</p>
            </header>

            <div class="row g-4 mutu-gallery">
                @php
                    $mutuCharts = [
                        ['file' => 'kecepatan waktu tanggap complain.png', 'alt' => 'Kecepatan waktu tanggap komplain'],
                        ['file' => 'kepatuhan kebersihan tangan.png', 'alt' => 'Kepatuhan kebersihan tangan'],
                        ['file' => 'kepatuhan penggunaan alat perlindungan diri.png', 'alt' => 'Kepatuhan penggunaan APD'],
                        ['file' => 'kepatuhan penggunaan formularium nasional.png', 'alt' => 'Kepatuhan formularium nasional'],
                        ['file' => 'kepatuhan terhadap clinical pathway.png', 'alt' => 'Kepatuhan clinical pathway'],
                        ['file' => 'kepatuhan upaya pencegahan risiko jatuh.png', 'alt' => 'Kepatuhan pencegahan risiko jatuh'],
                        ['file' => 'kepatuhanb visite dokter.png', 'alt' => 'Kepatuhan visite dokter'],
                        ['file' => 'kepuasan pasien dan keluarga.png', 'alt' => 'Kepuasan pasien dan keluarga'],
                        ['file' => 'pelaporan hasil kritis laboratorium.png', 'alt' => 'Pelaporan hasil kritis laboratorium'],
                        ['file' => 'waktu tunggu rajal kurang 1 jam.png', 'alt' => 'Waktu tunggu rawat jalan di bawah 1 jam'],
                        ['file' => 'kepatuhan identifikasi pasien.png', 'alt' => 'Kepatuhan identifikasi pasien'],
                        ['file' => 'waktu tanggap operasi sc emergensi.png', 'alt' => 'Waktu tanggap operasi sesar emergensi'],
                        ['file' => 'penundaan operasi elektif.png', 'alt' => 'Penundaan operasi elektif'],
                        ['file' => 'keberhasilan pemasangan infus.png', 'alt' => 'Keberhasilan pemasangan infus'],
                        ['file' => 'waktu tunggu obat farmasi rawat jalan.png', 'alt' => 'Waktu tunggu obat farmasi rawat jalan'],
                        ['file' => 'waktu tunggu rajal lebih 1 jam.png', 'alt' => 'Waktu tunggu rawat jalan lebih dari 1 jam'],
                    ];
                @endphp

                @foreach ($mutuCharts as $chart)
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="{{ min($loop->index * 35, 200) }}">
                        <figure class="mutu-chart-card rounded-4 overflow-hidden border shadow-sm mb-0 h-100 bg-white">
                            <img
                                src="{{ asset('../images/mutu/' . $chart['file']) }}"
                                alt="{{ $chart['alt'] }}"
                                loading="lazy"
                                decoding="async"
                                class="w-100 d-block img-fluid"
                            >
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <script>
        AOS.init();

        // Menambahkan kelas sticky navbar saat scroll
        window.onscroll = function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        };

         // Select modal elements
const modal = document.getElementById("gallery-modal");
const modalImg = document.getElementById("modal-img");
const captionText = document.getElementById("caption");
const closeBtn = document.querySelector(".close");
const galleryItems = document.querySelectorAll(".gallery-item");

// Open modal when gallery item is clicked
galleryItems.forEach((item) => {
  item.addEventListener("click", () => {
    modal.style.display = "block";
    modalImg.src = item.src;
    captionText.textContent = item.alt;
  });
});

// Close modal when 'X' is clicked
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

// Close modal when clicking outside the image
modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});
    </script>
@endsection
