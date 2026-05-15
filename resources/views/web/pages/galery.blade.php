@extends('web.layouts.app')

@section('content')
<style>
/* Carousel Styling */
.carousel {
    position: relative;
}

.carousel-inner {
    height: 100vh;
}

.carousel-item img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
    opacity: 0.8; /* Menurunkan opacity gambar */
}

.carousel-caption {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #fff;
    text-align: center;
    z-index: 10;
}

.carousel-caption h1 {
    font-size: 3.5rem;
    font-weight: bold;
    text-transform: uppercase;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
}

.carousel-caption h2 {
    font-size: 2rem;
    margin-top: 10px;
    font-weight: lighter;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
}

.carousel-caption p {
    font-size: 1.2rem;
    margin-top: 20px;
    line-height: 1.6;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
}

.carousel-indicators [data-bs-target] {
    background-color: #28a745; /* Warna hijau sesuai tema */
}

.carousel-indicators .active {
    background-color: #ff6600; /* Warna oranye sesuai tema */
}

    /* Animasi pada card dan hover */
.card-body {
    transition: transform 0.3s ease;
}
.card-body:hover {
    transform: scale(1.05);
}

/* Carousel gambar */
.carousel-inner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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




  .gallery-section {
        background-color: #f9f9f9;
    }

    .gallery-card {
        overflow: hidden;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .gallery-card img {
        transition: transform 0.3s ease;
    }

    .gallery-card:hover img {
        transform: scale(1.1);
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 128, 0, 0.8); /* Hijau dengan transparansi */
        color: #fff;
        text-align: center;
        padding: 10px;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
    }

    .gallery-card:hover .overlay {
        opacity: 1;
    }

    .overlay-text {
        font-size: 1rem;
        font-weight: 600;
        margin: 0;
    }

    @media (max-width: 576px) {
        .overlay-text {
            font-size: 0.9rem;
        }
    } 
</style>
</div>     
      

  <!-- Section Galeri -->
<section class="gallery-section py-5">
    <div class="container">
        <!-- Judul Galeri -->
        <div class="text-center mb-4">
            <h1 class="fw-bold text-success">Galeri Rumah Sakit Amanah Medical Centre</h1>
            <p class="text-muted">Dokumentasi kegiatan, fasilitas, dan layanan terbaik kami.</p>
        </div>

        <!-- Grid Galeri -->
        <div class="row g-3">
            <!-- Gambar 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="gallery-card position-relative">
                    <img src="{{ asset('images/ugd.jpg') }}" alt="Galeri 1" class="img-fluid rounded-3 shadow-sm">
                    <div class="overlay">
                        <p class="overlay-text">Fasilitas Modern</p>
                    </div>
                </div>
            </div>

            <!-- Gambar 2 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="gallery-card position-relative">
                    <img src="{{ asset('images/klinik_anak.jpg') }}" alt="Galeri 2" class="img-fluid rounded-3 shadow-sm">
                    <div class="overlay">
                        <p class="overlay-text">Pelayanan 24/7</p>
                    </div>
                </div>
            </div>

            <!-- Gambar 3 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="gallery-card position-relative">
                    <img src="{{ asset('images/layanan_farmasi.jpg') }}" alt="Galeri 3" class="img-fluid rounded-3 shadow-sm">
                    <div class="overlay">
                        <p class="overlay-text">Tim Medis Profesional</p>
                    </div>
                </div>
            </div>

            <!-- Gambar 4 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="gallery-card position-relative">
                    <img src="{{ asset('images/ok.jpg') }}" alt="Galeri 4" class="img-fluid rounded-3 shadow-sm">
                    <div class="overlay">
                        <p class="overlay-text">Ruang Rawat Inap Nyaman</p>
                    </div>
                </div>
            </div>

            <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
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
