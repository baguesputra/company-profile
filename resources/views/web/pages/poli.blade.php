@extends('web.layouts.app')

@section('content')
<style>

.layanan-item {
    margin-bottom: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
}

.layanan-item.visible {
    opacity: 1;
    transform: translateY(0);
}

.image-container img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    transition: transform 0.5s ease;
}

.image-container img:hover {
    transform: scale(1.05);
}

.text-container {
    padding: 20px;
}

.judul-layanan {
    font-size: 28px;
    font-weight: bold;
    color: #007B5E;
    margin-bottom: 15px;
    animation: fadeInRight 1s;
}

.deskripsi-layanan {
    font-size: 16px;
    line-height: 1.7;
    color: #555;
    animation: fadeInLeft 1s;
}

/* Alternating Layout */
.left-image .image-container {
    padding-right: 20px;
}

.right-image .image-container {
    padding-left: 20px;
}

/* Button Style */
.btn-outline-success {
    border: 2px solid #28a745;
    color: #28a745;
    padding: 12px 30px;
    transition: all 0.3s ease;
}

.btn-outline-success:hover {
    background-color: #28a745;
    color: #fff;
    transform: scale(1.05);
}

/* Animations */
@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
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
</style>


<section class="layanan-unggulan container my-5">
    <h2 class="text-center mb-4">Layanan Unggulan</h2>


        @php
            $layananUnggulan = [
                ['icon' => 'ugd.jpg', 'title' => 'Eye Center', 'desc' => 'Pelayanan darurat 24 jam dengan tenaga medis profesional.'],
                ['icon' => 'radiologi.jpg', 'title' => 'One Day Care', 'desc' => 'Pemeriksaan radiologi dengan teknologi canggih untuk diagnosis yang akurat.'],
                ['icon' => 'layanan_farmasi.jpg', 'title' => 'Cardiovascular', 'desc' => 'Layanan obat-obatan lengkap dan konsultasi farmasi.'],
                ['icon' => 'laboratorium.jpg', 'title' => 'Esthetic Center', 'desc' => 'Pemeriksaan laboratorium yang akurat dan cepat.'],
                ['icon' => 'rehab.jpg', 'title' => 'Auditorium', 'desc' => 'Fasilitas rehabilitasi untuk pemulihan optimal pasien.'],
                ['icon' => 'rehab.jpg', 'title' => 'Medical Check Up (Mcu)', 'desc' => 'Fasilitas rehabilitasi untuk pemulihan optimal pasien.'],
                ['icon' => 'rehab.jpg', 'title' => 'Fertilisasi in Vitro (IF)', 'desc' => 'Fasilitas rehabilitasi untuk pemulihan optimal pasien.'],
                ['icon' => 'rehab.jpg', 'title' => 'Ruang OK', 'desc' => 'Fasilitas rehabilitasi untuk pemulihan optimal pasien.'],
            ];
        @endphp

        @foreach ($layananUnggulan as $index => $item)
        <div class="row align-items-center layanan-item {{ $index % 2 == 0 ? 'left-image' : 'right-image' }}">
            <div class="col-md-6 {{ $index % 2 == 0 ? 'order-md-1' : 'order-md-2' }} image-container">
                <img src="{{ asset('images/' . $item['icon']) }}" alt="{{ $item['title'] }}" class="img-fluid animated-image">
            </div>
            <div class="col-md-6 {{ $index % 2 == 0 ? 'order-md-2' : 'order-md-1' }} text-container">
                <h3 class="judul-layanan">{{ $item['title'] }}</h3>
                <p class="deskripsi-layanan">{{ $item['desc'] }}</p>
            </div>
        </div>
    @endforeach

        <!-- Tombol untuk halaman layanan lengkap -->
        <!-- <div class="text-center mt-4">
            <a href="{{ url('/layanan-unggulan') }}" class="btn btn-success px-4 py-2">Lihat Semua Layanan</a>
        </div> -->
   
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
