<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('../images/logo_amc.png') }}">
    <title>Amanah Medical Centre</title>

    {{-- Koneksi awal ke CDN mempercepat TLS/DNS pada first paint --}}
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Bootstrap CSS (tetap blocking: layout & grid) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- AOS CSS (blocking: hindari flash sebelum animasi) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
    <!-- @vite('resources/css/app.css') -->

    {{-- Font Awesome + Bootstrap Icons: non-blocking (file besar, tidak tahan first paint) --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" media="print" onload="this.media='all'" crossorigin="anonymous">
    <noscript><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" crossorigin="anonymous"></noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" media="print" onload="this.media='all'" crossorigin="anonymous">
    <noscript><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" crossorigin="anonymous"></noscript>


</head>

<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <img id="loading-logo" src="{{ asset('../images/logo_amc.png') }}" alt="Loading Logo" width="120" height="120" decoding="async" fetchpriority="high">
    </div>

    <!-- HUT Anniversary Popup -->
<div id="hutPopup" class="hut-popup-overlay">
    <div class="hut-popup-content">
        <!-- Tombol Close (X) -->
        <button class="hut-popup-close" id="closeHutPopup">&times;</button>
        
        <div class="hut-popup-inner">
            <!-- Sisi Gambar -->
            <div class="hut-popup-image">
                <img src="{{ asset('../images/hut/brosur1.jpeg') }}" alt="HUT Funwalk Event" loading="lazy" decoding="async">
            </div>

            <!-- Sisi Konten Teks -->
            <div class="hut-popup-text">
                <!-- Logo Anniversary Anda -->
                <img src="{{ asset('../images/hut/logo.png') }}" alt="Logo HUT" class="hut-logo-top" loading="lazy" decoding="async">
                
                <h2 class="hut-popup-title">Anniversary</h2>
                <h1 class="hut-popup-subtitle">RS Amanah <br>Medical Centre</h1>
                
                <div class="hut-popup-date">
                    <i class="far fa-calendar-alt"></i> 10 Mei 2026
                </div>

                <p class="hut-popup-desc">
                    Mari bergabung dalam kemeriahan <strong>Funwalk Eksklusif</strong>. Rayakan kebersamaan dan kesehatan bersama kami!
                </p>

                <div class="hut-popup-actions">
                    <a href="https://forms.gle/bqA7y2qEUwu6zsAT7" target="_blank" class="hut-popup-btn">
                        DAFTAR SEKARANG
                    </a>
                    <!-- <button class="hut-popup-later" id="laterHutPopup">Mungkin nanti</button> -->
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Navbar -->
    @include('web.partials.header')

    <!-- Main Content -->
    <main>
        @yield('content') <!-- Placeholder for dynamic page content -->
    </main>

    <!-- Footer -->
    @include('web.partials.footer')

    <!-- Call Center Sticky Button -->
    <div class="call-center-sticky" style="display: none;">
        <button class="call-center-btn" id="callCenterBtn">
            <i class="fab fa-whatsapp"></i>
            <span>Hubungi Kami</span>
        </button>
        <div class="call-center-menu" id="callCenterMenu">
            <a href="https://wa.me/628115193044?text=Halo,%20saya%20ingin%20informasi%20marketing" class="call-center-option" target="_blank">
                <i class="fab fa-whatsapp text-success"></i>
                <span>Marketing</span>
            </a>
            <a href="https://wa.me/628115193088?text=Halo,%20saya%20ingin%20mendaftar%20sebagai%20pasien" class="call-center-option" target="_blank">
                <i class="fab fa-whatsapp text-primary"></i>
                <span>Pendaftaran</span>
            </a>
            <a href="https://wa.me/628115113205?text=Halo,%20saya%20butuh%20bantuan%20customer%20care" class="call-center-option" target="_blank">
                <i class="fab fa-whatsapp text-warning"></i>
                <span>Customer Care</span>
            </a>
        </div>
    </div>

    <!-- Scripts -->

    <!-- Bootstrap JS (defer: tidak memblokir parsing HTML) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" defer></script>

    <!-- Custom JS (AOS.init dipanggil sekali di dalam script.js) -->
    <script src="{{ asset('../js/script.js') }}" defer></script>
</body>

</html>
