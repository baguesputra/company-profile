@extends('web.layouts.app')

@push('styles')
    {{-- Hero carousel: prioritas tinggi agar first paint halaman beranda lebih cepat --}}
    <link rel="preload" as="image" href="{{ asset('../images/gedung_amc.jpg') }}" fetchpriority="high">
@endpush

@section('content')
<div id="headerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Carousel Items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('../images/gedung_amc.jpg') }}" class="d-block w-100 carousel-image" alt="Hospital Building" fetchpriority="high" decoding="async">
            <div class="carousel-caption custom-caption">
                <h1>Rumah Sakit</h1>
                <h2>
                    <span class="text-success">Amanah</span>
                    <span class="text-warning">Medical Centre</span>
                </h2>
                <p>Melayani dengan penuh amanah, kepercayaan, dan profesionalisme.</p>  
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('../images/pelayanan.JPG') }}" class="d-block w-100 carousel-image" alt="Our Services" loading="lazy" decoding="async">
            <div class="carousel-caption custom-caption">
                <h1>Pelayanan Terbaik</h1>
                <h2>Untuk Kesehatan Anda</h2>
                <p>Memberikan fasilitas dan tenaga medis yang profesional.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('../images/tim.JPG') }}" class="d-block w-100 carousel-image" alt="Our Team" loading="lazy" decoding="async">
            <div class="carousel-caption custom-caption">
                <h1>Tim Profesional</h1>
                <h2>Siap Membantu Anda</h2>
                <p>Kami hadir dengan pelayanan ramah dan amanah.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>  
      
<!-- Layanan Box -->
<section class="layanan-section py-5">
  <div class="container">
    <div class="row g-3 justify-content-center">
      <!-- Box 1 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="{{ route('web.jadwal') }}" class="layanan-box">
          <div class="icon-wrap">
            <i class="fas fa-user-md"></i>
          </div>
          <h5>CARI DOKTER</h5>
        </a>
      </div>

      <!-- Box 2 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="{{ route('web.info_bed') }}" class="layanan-box">
          <div class="icon-wrap">
            <i class="fas fa-users"></i>
          </div>
          <h5>INFO BED</h5>
        </a>
      </div>

      <!-- Box 3 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="#" class="layanan-box">
          <div class="icon-wrap">
            <i class="fab fa-whatsapp"></i>
          </div>
          <h5>WHATSAPP</h5>
        </a>
      </div>
    </div>

    <!-- Partner Logo -->
    <h2 class="text-center section-title mt-5">Partners</h2>
    <div class="row text-center justify-content-center g-3">
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/bri life.png') }}" class="partner-logo" alt="BRI Life" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/admedika.webp') }}" class="partner-logo" alt="AdMedika" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/bni life.png') }}" class="partner-logo" alt="BNI Life" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/mandiri in health.png') }}" class="partner-logo" alt="Mandiri InHealth" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/asuransi_mag.png') }}" class="partner-logo" alt="Asuransi Mag" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/axa.png') }}" class="partner-logo" alt="AXA" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/car.png') }}" class="partner-logo" alt="CAR" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/fullerton.png') }}" class="partner-logo" alt="Fullerton" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/global_excel.webp') }}" class="partner-logo" alt="Global Excel" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/medika_plaza.png') }}" class="partner-logo" alt="Medika Plaza" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/medilink.png') }}" class="partner-logo" alt="Medilink" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/rey.jpeg') }}" class="partner-logo" alt="Prudential" loading="lazy" decoding="async">
        </div>
      </div>

      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/aca.jpg') }}" class="partner-logo" alt="ACA" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/airports.jpg') }}" class="partner-logo" alt="Airports" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/angkasapura.png') }}" class="partner-logo" alt="Angkasa Pura" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/antang.png') }}" class="partner-logo" alt="Antang" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/asabri.png') }}" class="partner-logo" alt="ASABRI" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/astralife.png') }}" class="partner-logo" alt="Astra Life" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/avrist.png') }}" class="partner-logo" alt="Avrist" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/bankkalsel.png') }}" class="partner-logo" alt="Bank Kalsel" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/bcalife.jpg') }}" class="partner-logo" alt="BCALife" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/bosowa.png') }}" class="partner-logo" alt="Bosowa" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/chubb.png') }}" class="partner-logo" alt="Chubb" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/fwd.jpg') }}" class="partner-logo" alt="FWD" loading="lazy" decoding="async">
        </div>
      </div>

      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/hanwha.jpg') }}" class="partner-logo" alt="Hanwha" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/hasnur.webp') }}" class="partner-logo" alt="Hasnur" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/higea.png') }}" class="partner-logo" alt="Higea" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/japfa.png') }}" class="partner-logo" alt="Japfa" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/jasa_raharja.png') }}" class="partner-logo" alt="Jasa Raharja" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/jasamarga.png') }}" class="partner-logo" alt="Jasa Marga" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/jasindo.jpg') }}" class="partner-logo" alt="Jasindo" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/jiwasraya.png') }}" class="partner-logo" alt="Jiwasraya" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/meditap.png') }}" class="partner-logo" alt="Meditap" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/megalife.webp') }}" class="partner-logo" alt="Mega Life" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/nayaka.png') }}" class="partner-logo" alt="Nayaka" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/nowlexa.webp') }}" class="partner-logo" alt="Nowlexa" loading="lazy" decoding="async">
        </div>
      </div>

      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/permata.png') }}" class="partner-logo" alt="Permata" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/pertalife.png') }}" class="partner-logo" alt="Perta Life" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/pln.png') }}" class="partner-logo" alt="PLN" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/sequis.png') }}" class="partner-logo" alt="Sequis" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/sompo.jpg') }}" class="partner-logo" alt="Sompo" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/sunday.png') }}" class="partner-logo" alt="Sunday" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/sunlife.png') }}" class="partner-logo" alt="Sun Life" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/taspen.png') }}" class="partner-logo" alt="Taspen" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/tirta.jpg') }}" class="partner-logo" alt="Tirta" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/tokio.webp') }}" class="partner-logo" alt="Tokio" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="partner-logo-container">
          <img src="{{ asset('../images/asuransi/zurich.png') }}" class="partner-logo" alt="Zurich" loading="lazy" decoding="async">
        </div>
      </div>

      <!-- <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <img src="{{ asset('../images/asuransi/tirta.jpg') }}" class="img-fluid partner-logo" alt="Prudential">
      </div> -->
      {{-- Tambahan logo partners mengikuti semua file yang ada di folder public/images/asuransi/ --}}
    </div>
  </div>
</section>


    <!-- Profil -->
    <!-- <section id="profil" class="section profile-section" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center">
          
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('../images/gedung_icon.png') }}" alt="Profil Rumah Sakit" class="img-fluid">
            </div>

            <div class="col-md-6" data-aos="fade-left">
                <h2 class="section-title">🏥 Profil Rumah Sakit</h2>
                <p class="profile-description">
                    <strong>RS Amanah Medical Centre (RS AMC)</strong> adalah rumah sakit kelas C di bawah naungan 
                    <strong>PT. Syifa Tiga Tiga</strong>. Didirikan oleh Bapak dan Ibu Imam Abror, pemilik Amanah Group, 
                    yang bergerak di berbagai bidang seperti pertambangan, perkapalan, pelabuhan, air minum, agrobisnis, 
                    dan taman hiburan.
                </p>
                <p>
                    Rumah sakit ini bertujuan memberikan manfaat bagi masyarakat dengan menjadikan mutu dan keselamatan 
                    pasien sebagai prioritas utama. Pelayanan dilakukan oleh SDM yang terampil dan penuh kesantunan.  
                </p>

                Tombol CTA
                <a href="#layanan-unggulan" class="btn btn-primary custom-btn mt-3" data-aos="zoom-in">Lihat Layanan Kami</a>
            </div>
        </div>
    </div>
</section> -->


    <!-- Visi dan Misi -->
    <!-- <section id="visi-misi" class="section visi-misi-section" data-aos="fade-up">
    <div class="container">
      
        <h2 class="text-center section-title" data-aos="fade-down">Visi & Misi</h2>

      
        <div class="visi" data-aos="fade-right">
            <h4 class="sub-title">Visi</h4>
            <p class="visi-text">
                Menjadi rumah sakit yang mengutamakan mutu dan keselamatan pasien dengan standar Nasional.
            </p>
        </div>

      
        <hr class="divider" data-aos="zoom-in">

     
        <div class="misi" data-aos="fade-left">
            <h4 class="sub-title">Misi</h4>
            <ul class="misi-list">
                <li>Merekrut dan mengembangkan kompetensi SDM dalam hal skill, knowledge, dan attitude yang mampu memberikan pelayanan tampil beda dan santun.</li>
                <li>Membangun bangunan yang fungsional dan atraktif serta memenuhi standar akreditasi (SNARS).</li>
                <li>Melengkapi dan mengembangkan peralatan medis dan non-medis sesuai dengan standar internasional yang siap pakai.</li>
                <li>Mengembangkan sistem-sistem pelayanan berbasis teknologi digital dan informasi.</li>
                <li>Memberikan pelayanan yang sesuai standar, atraktif, dan santun dalam bentuk sentra-sentra pelayanan.</li>
                <li>Berperan aktif bekerjasama dengan pemerintah daerah dalam membantu peningkatan derajat kesehatan masyarakat (MDG’s) Banjarmasin dan sekitarnya.</li>
            </ul>
        </div>
    </div>
</section> -->




    <!-- Sambutan Direksi Section -->
<section id="sambutan-direksi" class="section bg-light">
    <!-- <div class="dots-decoration"></div> -->
    <div class="container">
        <div class="row align-items-center">
            <!-- Foto Direksi -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('../images/bapak_ibu.png') }}" alt="Direktur Rumah Sakit" class="img-fluid" loading="lazy" decoding="async">
                <h5 class="mt-3">Bapak Abror dan Ibu Sunarti</h5>
                <p>Pemilik Rumah Sakit Amanah Medical Centre</p>
            </div>
            <!-- Sambutan -->
            <div class="col-md-8">
                <h2 class="text-success">Sambutan Owner</h2>
                <p>
                    Assalamu’alaikum warahmatullahi wabarakatuh, 
                </p>
                <p>
                Selamat datang di Rumah Sakit Amanah Medical Centre, Salam Sejahtera Bagi Kita Semua,Om Swastiastu, Namo Buddhaya, Salam Kebajikan dan salam sehat. Puji dan Syukur senantiasa kita panjatkan kehadirat Tuhan Yang Maha Kuasa,yang telah memberikan rahmat dan karuniaNya kepada kita semua. Rumah sakit Amanah Medical Center disingkat RS AMC, merupakan rumah sakit kelas C berada dibawah PT. Syifa Tiga Tiga berlokasi di Jl. MT Haryono Banjarmasin Kalimantan Selatan.
                </p>
             
            </div>
        </div>
    </div>
</section>


<!-- Statistik Rumah Sakit -->
<section id="stats-section" class="stats-section py-5">
    <div class="container">
        <div class="row text-center g-4">
            <!-- Jumlah Dokter -->
            <div class="col-6 col-md-3">
                <div class="stats-box">
                    <i class="fas fa-user-md"></i>
                    <h2 class="counter" data-target="130">0</h2>
                    <p>Dokter</p>
                </div>
            </div>
            <!-- Jumlah Pasien -->
            <div class="col-6 col-md-3">
                <div class="stats-box">
                    <i class="fas fa-procedures"></i>
                    <h2 class="counter" data-target="108">0</h2>
                    <p>Bed</p>
                </div>
            </div>
            <!-- Jumlah Ruangan -->
            <div class="col-6 col-md-3">
                <div class="stats-box">
                    <i class="fas fa-hospital"></i>
                    <h2 class="counter" data-target="40">0</h2>
                    <p>Ruangan</p>
                </div>
            </div>
            <!-- Jumlah Tenaga Medis -->
            <div class="col-6 col-md-3">
                <div class="stats-box">
                    <i class="fas fa-user-nurse"></i>
                    <h2 class="counter" data-target="133">0</h2>
                    <p>Tenaga Medis</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Layanan Unggulan -->
    <section id="pelayanan" class="section layanan-unggulan" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center section-title mb-5">Layanan Unggulan</h2>
            <div class="layanan-grid-container">
                @php
                    $layananUnggulan = [
                          ['icon' => 'eye_center.jpg', 'title' => 'Eye Center', 'route' => 'web.layanan_unggulan.eye_center'],

                          ['icon' => 'radiologi.jpg', 'title' => 'One Day Care', 'route' => 'web.layanan_unggulan.one_day_care'],

                          ['icon' => 'cardiovascular.jpg', 'title' => 'Cardiovascular', 'route' => 'web.layanan_unggulan.cardiovascular'],

                          ['icon' => 'ivf.jpg', 'title' => 'Fertilisasi In Vitro (IVF)', 'route' => 'web.layanan_unggulan.fertilisasi_in_vitro_(ivf)'],

                          ['icon' => 'rehab.jpg', 'title' => 'Physical Rehabilitation Centre', 'route' => 'web.layanan_unggulan.physical_rehabilitation_centre'],

                          ['icon' => 'maternity.jpg', 'title' => 'Maternity Centre', 'route' => 'web.layanan_unggulan.maternity_centre'],
                   
                    ];
                @endphp

                @foreach ($layananUnggulan as $index => $item)
                <a href="{{ route($item['route']) }}" class="layanan-card text-decoration-none" 
                   data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" role="button" tabindex="0">
                    <div class="card-image">
                        <img src="{{ asset('../images/layanan_unggulan/' . $item['icon']) }}" 
                             alt="{{ $item['title'] }}" loading="lazy" decoding="async">
                    </div>
                    <h3 class="card-title">{{ $item['title'] }}</h3>
                </a>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('web.layanan_unggulan') }}" class="btn btn-primary btn-lg see-all-btn">
                    Lihat Semua Layanan <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>


<section class="promo-rs">
  <div class="container">
    <h2 class="promo-heading">PROMOSI KAMI</h2>
    <p class="promo-subtitle">Rumah Sakit Amanah Medical Centre</p>

    <div class="promo-list">
      <!-- Promo 1 -->
      <div class="promo-item">
        <img src="{{ asset('../images/promo/1763705076.jpg') }}" alt="Promo 1" loading="lazy" decoding="async">
      </div>
      <!-- Promo 2 -->
      <div class="promo-item">
        <img src="{{ asset('../images/promo/1763705116.jpg') }}" alt="Promo 2" loading="lazy" decoding="async">
      </div>
      <!-- Promo 3 -->
      <div class="promo-item">
        <img src="{{ asset('../images/promo/1763705126.jpg') }}" alt="Promo 3" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="promo-btn-wrapper">
      <a href="{{ route('web.promo') }}" class="promo-btn">INFO LAINNYA</a>
    </div>
  </div>
</section>


<!-- Berita Informasi -->
<section class="artikel-section py-5">

    <div class="container">
        <h2 class="text-center mb-4 fw-bold" data-aos="fade-up">Artikel Kesehatan Terbaru</h2>
        <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
            Temukan berbagai informasi kesehatan terpercaya yang dapat membantu Anda menjaga kesehatan setiap hari.
        </p>

        <div class="artikel-grid">
            @foreach ($artikels as $artikel)
                <div class="artikel-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <img src="{{ asset('../images/' . $artikel->image) }}" class="artikel-img" alt="{{ $artikel->title }}" loading="lazy" decoding="async">
                    <div class="artikel-card-body">
                        <div class="artikel-meta">
                            <i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($artikel->published_date)->format('d M Y') }}
                        </div>
                        <h5 class="card-title">{{ $artikel->title }}</h5>
                        <p class="card-text">{{ $artikel->description }}</p>
                        <a href="{{ route('web.artikel.detail', $artikel->id) }}" class="btn btn-outline-success">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Tombol untuk halaman artikel lengkap -->
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('web.informasi') }}" class="btn btn-success px-4 py-2">Lihat Semua</a>
        </div>
    </div>
</section>

<!-- HUT Section - Clean & Luxurious -->
<section class="hut-section py-5">
  <div class="container">
    <div class="hut-inner">

      {{-- Carousel --}}
      <div class="carousel-wrap">
        <div class="carousel-track-outer">
          <div class="carousel-track" id="hutTrack">
           
            <div class="carousel-slide">
              <img src="{{ asset('../images/hut/brosur1.jpeg') }}" alt="Brosur1" loading="lazy" decoding="async">
            </div>
            <div class="carousel-slide">
              <img src="{{ asset('../images/hut/brosur2.jpeg') }}" alt="Brosur2" loading="lazy" decoding="async">
            </div>
             <div class="carousel-slide">
              <img src="{{ asset('../images/hut/brosur3.jpeg') }}" alt="Brosur2" loading="lazy" decoding="async">
            </div>
             <div class="carousel-slide">
              <img src="{{ asset('../images/hut/brosur4.jpeg') }}" alt="Brosur2" loading="lazy" decoding="async">
            </div>
             <div class="carousel-slide">
              <img src="{{ asset('../images/hut/brosur5.jpeg') }}" alt="Brosur2" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
        <button class="hut-c-btn prev" onclick="hutSlide(-1)" aria-label="Sebelumnya">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="hut-c-btn next" onclick="hutSlide(1)" aria-label="Berikutnya">
          <i class="bi bi-chevron-right"></i>
        </button>
        <div class="hut-dots" id="hutDots"></div>
      </div>

      {{-- Content --}}
      <div class="hut-content">
        <div class="hut-tag">1 Tahun Bersama</div>
        <h2 class="hut-title">
          1st Year Anniversary<br>
          <em>RS Amanah Medical Centre</em>
        </h2>
        <div class="hut-date-badge">
          <span class="hut-dot"></span>
          10 Mei 2026
        </div>
        <div class="hut-divider"></div>
        <p class="hut-desc">
          Saksikan <strong>Funwalk Eksklusif</strong> dalam perayaan anniversary
          yang penuh kebanggaan ini. Rayakan satu tahun perjalanan kami bersama Anda.
        </p>
        <a href="https://forms.gle/bqA7y2qEUwu6zsAT7" target="_blank" class="btn-hut-reg">
          Daftar Sekarang <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</section>

  <section class="jih-tv py-5">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="fw-bold">AMC Update</h2>
        <p class="text-muted">Lebih dekat dengan Rumah Sakit AMC, saksikan juga video berikut!</p>
      </div>

      <div class="row g-4">
        <!-- Loop manual contoh 3 video -->
        <div class="col-12 col-md-4">
          <div class="video-card position-relative rounded overflow-hidden">
            <a href="#" class="video-trigger d-block" data-video="{{ asset('../videos/250510 GrandOpening Amanah_RS.mp4') }}">
              <img src="{{ asset('../videos/thumbnails/opening.png') }}" class="thumbnail img-fluid w-100" alt="Grand Opening AMC" loading="lazy" decoding="async">
              <div class="play-button">
                <i class="bi bi-play-circle-fill"></i>
              </div>
            </a>
          </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="video-card position-relative rounded overflow-hidden">
          <a href="#" class="video-trigger d-block" data-video="{{ asset('../videos/mri.mp4') }}">
            <img src="{{ asset('../videos/thumbnails/alat.png') }}" class="thumbnail img-fluid w-100" alt="MRI Tesla 1.5 Tesla" loading="lazy" decoding="async">
            <div class="play-button">
              <i class="bi bi-play-circle-fill"></i>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="video-card position-relative rounded overflow-hidden">
          <a href="#" class="video-trigger d-block" data-video="{{ asset('../videos/compro.mp4') }}">
            <img src="{{ asset('../videos/thumbnails/compro.png') }}" class="thumbnail img-fluid w-100" alt="Peralatan Medis AMC" loading="lazy" decoding="async">
            <div class="play-button">
              <i class="bi bi-play-circle-fill"></i>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Popup Modal -->
<div id="videoModal" class="video-modal">
  <div class="video-modal-content">
    <span class="close">&times;</span>
    <video id="popupVideo" controls></video>
  </div>
</div>



    <!-- Galeri Ruangan (Carousel) -->
    <!-- <section id="gallery" class="section">
        <div class="container">
            <h2 class="text-center">Galeri Rumah Sakit</h2>
            <div class="gallery-grid">
                <img src="{{ asset('images/farmasi.jpg') }}" alt="Gallery Image 1" class="gallery-item" />
                <img src="{{ asset('images/kamar.jpg') }}" alt="Gallery Image 2" class="gallery-item" />
                <img src="{{ asset('images/klinik_anak.jpg') }}" alt="Gallery Image 3" class="gallery-item" />
                <img src="{{ asset('images/ruang_bersalin.jpg') }}" alt="Gallery Image 4" class="gallery-item" />
                <img src="{{ asset('images/poliklinik.jpg') }}" alt="Gallery Image 5" class="gallery-item" />
                <img src="{{ asset('images/dental_poli.jpg') }}" alt="Gallery Image 6" class="gallery-item" />
              </div>
              <div id="gallery-modal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modal-img" />
                <div id="caption"></div>
              </div>
        </div>
    </section> -->


    <!-- Lokasi Rumah Sakit -->
<!-- <section id="lokasi" class="section" data-aos="fade-up">
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <div class="map-container" style="position: relative; overflow: hidden; padding-bottom: 56.25%; height: 0; max-width: 100%; height: 300px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d974.102810114785!2d114.5866045284801!3d-3.3249058027887597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a8952504db%3A0x1e5fedd85abfd55f!2sPT%20PP%20PROYEK%20RS%20AMANAH%20MEDICAL%20CENTRE!5e0!3m2!1sen!2sid!4v1738569340565!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        
            <div class="col-md-6">
                <h2 class="text-center mb-4">Lokasi Rumah Sakit Amanah Medical Centre</h2>
                <p class="text-center">
                    Jl. Contoh Alamat No. 123, <br>
                    Kota Contoh, Provinsi Contoh, <br>
                    Indonesia, 12345
                </p>
            </div>
        </div>
    </div>
</section> -->



<!-- <section class="app-download py-5">
    <div class="container">
        <div class="row align-items-center">
            
            
            <div class="col-md-6 text-center" data-aos="fade-right">
                <img src="{{ asset('../images/mockup_hp.png') }}" alt="Aplikasi Mobile JIH" class="img-fluid phone-mockup">
            </div>

            <div class="col-md-6" data-aos="fade-left">
                <h2 class="fw-bold mb-3">Closer to AMC Hospital</h2>
                <p class="text-muted mb-4">
                    Unduh aplikasi <strong>RS AMC Mobile</strong> untuk kemudahan pendaftaran, informasi layanan, dan akses kesehatan lebih cepat langsung dari ponsel Anda.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-primary px-4 py-2">
                        <i class="bi bi-google-play"></i> Google Play
                    </a>
                    <a href="#" class="btn btn-outline-dark px-4 py-2">
                        <i class="bi bi-apple"></i> App Store
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->



    <!-- Pengumuman Coming Soon -->
  <!-- <section id="announcement" class="section announcement-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="announcement-title">📢 Pengumuman</h2>
        <div class="announcement-card">
            <p class="announcement-text">
                <strong>Akan Segera Dibuka!</strong><br>
                Kami siap memberikan layanan kesehatan terbaik untuk Anda.  
            </p>
            <a href="{{ route('web.pengumuman') }}" class="btn btn-animated mt-3">Lihat Detail Pengumuman</a>
        </div>
    </div>
</section> -->

@endsection
