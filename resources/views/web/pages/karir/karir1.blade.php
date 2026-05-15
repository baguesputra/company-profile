@extends('web.layouts.app')

@section('content')
<style>
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


/* General Reset */

  
  /* Header Section */
  .header-section {
    display: flex;
    height: 100vh;
    background-color: #f5f5f5;
  }
  
  .header-content {
    display: flex;
    flex-direction: row;
    width: 100%;
    position: relative;
    overflow: hidden;
  }
  
  /* Header Text Area */
  .header-text {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 50px;
    background: #fff; /* Bersih tanpa gradien */
    color: #333;
    position: relative;
    z-index: 2;
  }
  
  .header-text h1 {
    font-size: 3.5rem;
    margin: 0;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  .header-text h2 {
    font-size: 2rem;
    margin-top: 10px;
    font-weight: lighter;
  }
  
  .header-text p {
    margin-top: 20px;
    font-size: 1.2rem;
    line-height: 1.6;
    color: #555;
  }
  
  /* Wave Effect (Berkelok) */
  .header-text::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50px;
    background: url('wave.svg') repeat-x;
    background-size: cover;
    z-index: 1;
    transform: translateY(100%);
  }
  
  /* Header Image Area */
  .header-image {
    flex: 1;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  
  .header-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  /* Overlay Effect for Wave */
  .header-image::before {
    content: "";
    position: absolute;
    top: -50px;
    left: 0;
    width: 100%;
    height: 50px;
    background: url('wave.svg') repeat-x;
    background-size: cover;
    transform: translateY(-100%);
    z-index: 1;
  }

/* Alert warning */
.alert-warning {
    background-color: #ff6600;
    color: white;
}

/* Card Styling */
.card {
    border: 2px solid #28a745;
}

.card-body {
    background-color: #f8f9fa;
}

.card-title {
    color: #28a745;
}


/* Section background */
.section {
    padding: 50px 0;
}

#profil { background: #f5f5f5; } /* Soft Gray */
#visi-misi { background: #ffffff; } /* White */
#pelayanan { background: #f9f9f9; } /* Light Gray */
#gallery { background: #ffffff; } /* White */
#announcement { background: #fffcf3; } /* Light Soft Orange */

/* Section Heading */
section h2 {
    font-size: 2.5rem;
    color: #28a745;
    font-weight: 600;
}

/* Section Paragraphs */
section p, section ul {
    font-size: 1.1rem;
    color: #333;
}

/* Section Styling */
.gallery-section {
    padding: 50px 20px;
    text-align: center;
    background-color: #f9f9f9;
  }
  
  .section-title {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
  }
  
  /* Gallery Grid */
  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
  }
  
  .gallery-item {
    width: 100%;
    height: auto;
    border-radius: 8px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  }
  
  /* Modal Styling */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  .modal-content {
    display: block;
    margin: auto;
    max-width: 80%;
    max-height: 80%;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
  }
  
  .close {
    position: absolute;
    top: 20px;
    right: 35px;
    color: white;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
  }
  
  .close:hover {
    color: #ff5c5c;
  }
  
  #caption {
    text-align: center;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
  }
  

/* Responsiveness: Max Width 768px */
@media (max-width: 768px) {
    .header { height: 300px; }
    .header h1 { font-size: 1.8rem; }
    .header img { width: 100px; }
    .navbar-brand { font-size: 1.2rem; }
    section h2 { font-size: 1.5rem; }
    .card { margin-bottom: 20px; }
    footer { padding: 20px 0; }
}

/* Responsiveness: Max Width 576px */
@media (max-width: 576px) {
    .header { padding: 15px; }
    .header h1 { font-size: 1.5rem; }
    .navbar-brand { font-size: 1rem; }
    section h2 { font-size: 1.2rem; }
    .card-title { font-size: 1rem; }
    footer { font-size: 0.9rem; }
}

@media (max-width: 768px) {
    .header-content {
      flex-direction: column;
    }
  
    .header-text, .header-image {
      flex: none;
      width: 100%;
      height: 50vh;
    }
  
    .header-text {
      padding: 20px;
      text-align: center;
    }
  
    .header-text h1 {
      font-size: 2.5rem;
    }
  
    .header-text h2 {
      font-size: 1.5rem;
    }
  
    .header-text p {
      font-size: 1rem;
    }
  
    .header-text::after {
      height: 30px;
    }
  
    .header-image::before {
      height: 30px;
    }
  }






  .career-detail-section {
        background: #f8f9fa;
    }

    .career-title {
        font-size: 2.5rem;
    }

    .career-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .career-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: scale(1.05);
    }

    .bi {
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .career-title {
            font-size: 1.8rem;
        }
    }
</style>

<section class="career-detail-section py-5">
    <div class="container">
        <!-- Judul Karir -->
        <div class="text-center mb-4">
            <h1 class="career-title text-success fw-bold">Staff IT Rumah Sakit Amanah Medical Centre</h1>
            <p class="text-muted">Bergabunglah bersama kami untuk memberikan pelayanan kesehatan terbaik.</p>
        </div>

        <!-- Detail Karir -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="career-card shadow-sm p-4 bg-white rounded-4">
                    <!-- Info Umum -->
                    <div class="mb-4">
                        <h4 class="fw-bold">Deskripsi Pekerjaan</h4>
                        <p>
                            Kami mencari individu yang berdedikasi untuk mengelola dan mengembangkan sistem IT di Rumah Sakit Amanah Medical Centre.
                            Tanggung jawab meliputi pengelolaan jaringan, pemeliharaan sistem, serta mendukung kebutuhan teknologi informasi rumah sakit.
                        </p>
                    </div>

                    <!-- Kualifikasi -->
                    <div class="mb-4">
                        <h4 class="fw-bold">Kualifikasi</h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Sarjana di bidang IT atau sejenisnya</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Pengalaman minimal 1 tahun di bidang IT Support</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Mampu mengelola server dan jaringan (LAN/WAN)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Kemampuan troubleshooting yang baik</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Komunikatif dan mampu bekerja dalam tim</li>
                        </ul>
                    </div>

                    <!-- Informasi Tambahan -->
                    <div class="mb-4">
                        <h4 class="fw-bold">Lokasi & Tipe Pekerjaan</h4>
                        <p><i class="bi bi-geo-alt-fill text-warning me-2"></i>Banjarmasin, Kalimantan Selatan</p>
                        <p><i class="bi bi-briefcase-fill text-info me-2"></i>Full-Time</p>
                    </div>

                    <!-- Tombol Lamar -->
                    <div class="text-center">
                        <a href="" class="btn btn-success btn-lg px-5 py-2 rounded-pill shadow-sm">
                            Lamar Sekarang
                        </a>
                    </div>
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

    </script>
@endsection
