<style>
.goog-te-banner-frame.skiptranslate,
.goog-te-gadget {
    display: none !important;
}
body {
    top: 0px !important;
}

/* Sidebar Toggle Button */
#sidebarToggle {
    background: none;
    border: none;
    color: #333;
    font-size: 1.2rem;
    padding: 10px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
    margin-right: 10px;
}

#sidebarToggle:hover {
    background-color: rgba(0, 0, 0, 0.1);
}

/* Sidebar Styles */
.sidebar {
    position: fixed;
    top: 0;
    left: -300px;
    width: 300px;
    height: 100vh;
    background-color: #fff;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
    transition: left 0.3s ease;
    z-index: 1050;
    overflow-y: auto;
    padding-top: 80px;
}

.sidebar.active {
    left: 0;
}

.sidebar-header {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 60px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}

.sidebar-close {
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #666;
    cursor: pointer;
    padding: 5px;
    border-radius: 50%;
    transition: background-color 0.3s ease;
}

.sidebar-close:hover {
    background-color: rgba(0, 0, 0, 0.1);
    color: #333;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar li {
    border-bottom: 1px solid #f0f0f0;
}

.sidebar li:last-child {
    border-bottom: none;
}

.sidebar a {
    display: block;
    padding: 15px 20px;
    color: #333;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.sidebar a:hover {
    background-color: #f8f9fa;
    color: #28a745;
    padding-left: 25px;
}

.sidebar a i {
    margin-right: 15px;
    width: 20px;
    text-align: center;
}

.sidebar .dropdown-toggle {
    position: relative;
    cursor: pointer;
}

.sidebar .dropdown-toggle::after {
    content: '\f107';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    transition: transform 0.3s ease;
}

.sidebar .dropdown-toggle[aria-expanded="true"]::after {
    transform: translateY(-50%) rotate(180deg);
}

.sidebar .dropdown-menu {
    display: none;
    background-color: #f8f9fa;
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar .dropdown-menu.show {
    display: block;
}

.sidebar .dropdown-menu li {
    border-bottom: 1px solid #e9ecef;
}

.sidebar .dropdown-menu li:last-child {
    border-bottom: none;
}

.sidebar .dropdown-menu a {
    padding: 12px 40px;
    font-size: 0.9rem;
    color: #666;
    border-left: 3px solid transparent;
}

.sidebar .dropdown-menu a:hover {
    background-color: #e9ecef;
    color: #28a745;
    border-left-color: #28a745;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1040;
    display: none;
    backdrop-filter: blur(2px);
}

.overlay.active {
    display: block;
}


</style>
<!-- Navbar 1: Top Section -->
<nav class="navbar navbar-expand-lg navbar-1">
    <div class="container">
        <!-- Sidebar Toggle Button (Mobile) -->
        <button id="sidebarToggle" class="d-lg-none">
            <i class="fas fa-bars"></i>
        </button>
        
        <!-- Brand Logo -->
        <a class="navbar-brand" href="{{ route('web.dashboard') }}">
            <img src="{{ asset('../images/logo.jpeg') }}" alt="AMC Logo">
        </a>

        <!-- Contact Info & Social Media Links -->
        <div class="d-flex align-items-center">
           

            <!-- Contact Info (Desktop) -->
            <span class="me-4 d-none d-lg-inline-block contact-item">
                <svg class="icon" width="50" height="50">
        <use xlink:href="{{ asset('../icons/icons.svg#icon-24hours') }}"></use>
    </svg>

                Buka 24 Jam
            </span>
            <span class="me-4 d-none d-lg-inline-block contact-item">
            <svg class="icon" width="60" height="60">
    <use xlink:href="{{ asset('../icons/icons.svg#icon-ambulance') }}"></use>
</svg> Emergency: 0511-7903699
            </span>
            <span class="me-4 d-none d-lg-inline-block contact-item">
            <svg class="icon" width="40" height="40">
    <use xlink:href="{{ asset('../icons/icons.svg#icon-location') }}"></use>
</svg> Jln MT. Haryono No.21 Kertak Baru Ilir
            </span>
            <!-- Social Media Links (Desktop) -->
            <!-- <div class="social-media d-none d-lg-inline-block">
                <a href="#" class="me-2 social-icon" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="me-2 social-icon" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div> -->
        </div>
    </div>
</nav>

<!-- Navbar 2: Main Menu -->
<nav class="navbar navbar-expand-lg navbar-2 sticky-top d-none d-lg-block">
    <div class="container">
        <!-- Toggler for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('web.jadwal') }}">Jadwal Dokter</a></li>
              
                <li class="nav-item"><a class="nav-link" href="{{ route('web.layanan_medis') }}">Layanan Rumah Sakit</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('web.layanan_unggulan') }}">Layanan Unggulan</a></li>
            
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="layananDropdown">Informasi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('web.mutu') }}">Mutu Indikator</a></li>
                        <li><a class="dropdown-item" href="{{ route('web.informasi') }}">Artikel</a></li>
                    </ul>
                </li>
                
                <!-- <li class="nav-item"><a class="nav-link" href="{{ route('web.galery') }}">Galeri</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{ route('web.karir') }}">Karir</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="layananDropdown">Hubungi Kami</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('web.faq') }}">FAQ</a></li>
                        <li><a class="dropdown-item" href="{{ route('web.prosedur_pendaftaran') }}">Prosedur Pendaftaran</a></li>
                        <li><a class="dropdown-item" href="{{ route('web.kritik_saran') }}">Kritik dan Saran</a></li>
                    </ul>
                </li>
                <li class="nav-item promo-special"><a class="nav-link" href="{{ route('web.promo') }}">Promo Spesial</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar for Mobile -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <span style="font-weight: bold; color: #333;">Menu</span>
        <button class="sidebar-close" id="sidebarClose">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <ul>
        <li><a href="{{ route('web.jadwal') }}"><i class="fas fa-calendar-alt"></i> Jadwal Dokter</a></li>
        <li><a href="{{ route('web.layanan_medis') }}"><i class="fas fa-hospital"></i> Layanan Rumah Sakit</a></li>
        <li><a href="{{ route('web.layanan_unggulan') }}"><i class="fas fa-star"></i> Layanan Unggulan</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#sidebarInformasi" aria-expanded="false"><i class="fas fa-info-circle"></i> Informasi</a>
            <ul class="dropdown-menu collapse" id="sidebarInformasi">
                <li><a href="{{ route('web.mutu') }}"><i class="fas fa-question-circle"></i> Mutu Indikator</a></li>
                <li><a href="{{ route('web.informasi') }}"><i class="fas fa-clipboard-list"></i> Artikel</a></li>
            </ul>
        </li>
        <li><a href="{{ route('web.karir') }}"><i class="fas fa-briefcase"></i> Karir</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#sidebarHubungiKami" aria-expanded="false"><i class="fas fa-phone"></i> Hubungi Kami</a>
            <ul class="dropdown-menu collapse" id="sidebarHubungiKami">
                <li><a href="{{ route('web.faq') }}"><i class="fas fa-question-circle"></i> FAQ</a></li>
                <li><a href="{{ route('web.prosedur_pendaftaran') }}"><i class="fas fa-clipboard-list"></i> Prosedur Pendaftaran</a></li>
                <li><a href="{{ route('web.kritik_saran') }}"><i class="fas fa-comments"></i> Kritik dan Saran</a></li>
            </ul>
        </li>
        <li><a href="{{ route('web.promo') }}" class="promo-special"><i class="fas fa-gift"></i> Promo Spesial</a></li>
    </ul>
</div>
<div class="overlay" id="overlay"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarClose = document.getElementById('sidebarClose');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    // Toggle sidebar
    sidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
    });

    // Close sidebar when clicking close button
    sidebarClose.addEventListener('click', function() {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
    });

    // Close sidebar when clicking overlay
    overlay.addEventListener('click', function() {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
    });

    // Handle dropdown toggles in sidebar
    const dropdownToggles = sidebar.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('data-bs-target'));
            target.classList.toggle('show');
            this.setAttribute('aria-expanded', target.classList.contains('show'));
        });
    });
});
</script>

<!-- Documentation -->
<!--
- Navbar 1: Displays the hospital logo, contact information, and social media links.
- Navbar 2: A sticky-top menu for easy navigation, with dropdowns for sections like "Tentang Kami," "Layanan," and "Fasilitas."
- Sidebar: A collapsible menu for mobile users.
- Responsive Design: Uses Bootstrap classes to handle visibility for mobile and desktop views.
- Icons: Uses Font Awesome for icons.
-->



