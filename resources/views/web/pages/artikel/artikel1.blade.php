@extends('web.layouts.app')

@section('content')
<style>
/* Section Utama */
.announcement-detail-section {
    background: linear-gradient(135deg, #f0f4f8, #ffffff);
    padding: 60px 20px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    overflow: hidden;
}

/* Judul Section */
.announcement-title {
    font-size: 36px;
    font-weight: bold;
    color: #00796b;
    margin-bottom: 30px;
    animation: fadeInDown 1s ease-in-out;
}

/* Video Styling */
.video-wrapper {
    position: relative;
    max-width: 800px;
    margin: 0 auto 40px auto;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
}

.announcement-video {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.4s ease-in-out;
}

.announcement-video:hover {
    transform: scale(1.02);
}

/* Tanggal Acara */
.event-dates {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.date-card {
    background: #ffffff;
    border: 2px solid #00796b;
    padding: 20px 30px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    min-width: 200px;
}

.date-card:hover {
    transform: translateY(-10px);
    background: #00796b;
    color: #ffffff;
}

/* Efek Animasi */
@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
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


/* Section background */
.section {
    padding: 50px 0;
}

#profil { background: #f5f5f5; } /* Soft Gray */
#visi-misi { background: #ffffff; } /* White */
#pelayanan { background: #f9f9f9; } /* Light Gray */
#gallery { background: #ffffff; } /* White */

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

  .full-article-page {
    min-height: 100vh; /* Full halaman */
    background-color: #f0f4f8; /* Warna latar bersih */
    padding: 60px 0;
}

.full-article-page article {
    background: #ffffff;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    line-height: 1.8;
    transition: all 0.3s ease-in-out;
}

.full-article-page article:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 30px rgba(0, 0, 0, 0.15);
}

.full-article-page h1, 
.full-article-page h4 {
    color: #198754; /* Warna hijau elegan */
    font-weight: bold;
}

.full-article-page p, 
.full-article-page li {
    color: #555;
    font-size: 17px;
    margin-bottom: 12px;
}

.full-article-page ul, 
.full-article-page ol {
    margin-left: 20px;
}

.full-article-page img {
    width: 100%;
    border-radius: 8px;
    transition: 0.3s;
}

.full-article-page img:hover {
    opacity: 0.9;
    transform: scale(1.02);
}

.full-article-page a.btn {
    transition: 0.3s ease;
    font-weight: bold;
}

.full-article-page a.btn:hover {
    background-color: #198754;
    color: #fff;
    border-color: #198754;
}


</style>

<section class="full-article-page d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
          
                <article class="shadow-lg p-5 rounded bg-white">
                    <!-- Gambar Utama Artikel -->
                    <img src="{{ asset('images/artikel1.jpg') }}" class="img-fluid rounded mb-4" alt="Judul Artikel">

                    <!-- Judul Artikel dan Tanggal -->
                    <h1 class="fw-bold text-success mb-2">Pentingnya Medical Check-Up Rutin</h1>
                    <small class="text-muted d-block mb-4">Dipublikasikan pada: 02 Februari 2025</small>

                    <!-- Isi Artikel -->
                    <p>
                        Pemeriksaan kesehatan secara rutin atau yang dikenal sebagai <strong>medical check-up</strong> sangat penting dilakukan, bahkan untuk individu yang merasa sehat. Medical check-up membantu mendeteksi potensi masalah kesehatan sejak dini sebelum berkembang menjadi penyakit serius.
                    </p>

                    <h4 class="text-success mt-4">Mengapa Medical Check-Up Penting?</h4>
                    <p>
                        Medical check-up dapat membantu dalam:
                        <ul>
                            <li>Deteksi dini penyakit seperti diabetes, tekanan darah tinggi, dan kanker.</li>
                            <li>Mencegah komplikasi penyakit dengan penanganan lebih cepat.</li>
                            <li>Memantau kondisi kesehatan secara berkala.</li>
                        </ul>
                    </p>

                    <h4 class="text-success mt-4">Apa Saja yang Diperiksa?</h4>
                    <p>
                        Pemeriksaan meliputi:
                        <ol>
                            <li><strong>Pemeriksaan fisik:</strong> tekanan darah, detak jantung, dan pernapasan.</li>
                            <li><strong>Laboratorium:</strong> tes darah, urine, dan fungsi organ.</li>
                            <li><strong>Imaging:</strong> rontgen dada, EKG, atau USG sesuai kebutuhan.</li>
                        </ol>
                    </p>

                    <p>
                        Dengan melakukan medical check-up secara rutin, Anda dapat menjaga kualitas hidup dan mencegah risiko kesehatan yang lebih besar di masa depan.
                    </p>
                </article>

                <!-- Navigasi Kembali ke Daftar Artikel -->
                <div class="text-center mt-5">
                    <a href="{{ route('web.informasi') }}" class="btn btn-outline-success px-4 py-2">← Kembali ke Daftar Artikel</a>
                </div>
            </div>
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
