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

  .animated-image {
    transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.animated-image:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

</style>

<section id="rawat-inap" class="container my-5">
    <h2 class="text-center mb-4">Fasilitas Rawat Inap</h2>
    <p class="text-center text-muted mb-5">Kami menyediakan berbagai pilihan kamar rawat inap yang nyaman dengan fasilitas terbaik untuk mendukung pemulihan Anda.</p>

    @php
        $rawatInap = [
            [
                'icon' => 'kelas-standar.jpg',
                'title' => 'Kelas Standar',
                'desc' => 'Pilihan terjangkau dengan kenyamanan optimal untuk perawatan yang efektif.',
                'fasilitas' => [
                    'Tempat tidur pasien standar',
                    'Kamar mandi dalam',
                    'AC & kipas angin',
                    'Televisi bersama',
                    'Lemari kecil pribadi',
                    'Meja makan pasien',
                ]
            ],
            [
                'icon' => 'kelas-1.jpg',
                'title' => 'Kelas 1',
                'desc' => 'Kenyamanan lebih dengan fasilitas tambahan untuk mendukung pemulihan Anda.',
                'fasilitas' => [
                    'Tempat tidur pasien elektrik',
                    'Kamar mandi pribadi dengan water heater',
                    'AC',
                    'Televisi LED 32 inci',
                    'Lemari pakaian & meja belajar',
                    'Free Wi-Fi',
                ]
            ],
            [
                'icon' => 'vip.jpg',
                'title' => 'VIP',
                'desc' => 'Privasi dan kenyamanan dengan fasilitas premium untuk pengalaman terbaik.',
                'fasilitas' => [
                    'Ruang pribadi eksklusif',
                    'Tempat tidur pasien premium',
                    'Sofa untuk keluarga',
                    'Mini kulkas & microwave',
                    'AC split & LED TV 40 inci',
                    'Free Wi-Fi & layanan kebersihan harian',
                ]
            ],
            [
                'icon' => 'vvip.jpg',
                'title' => 'VVIP',
                'desc' => 'Fasilitas mewah dengan layanan personal untuk kenyamanan maksimal.',
                'fasilitas' => [
                    'Suite eksklusif dengan ruang tamu',
                    'Tempat tidur pasien deluxe',
                    'Kamar mandi mewah dengan bathtub',
                    'Pantry pribadi',
                    'AC premium, LED TV 50 inci',
                    'Layanan room service 24 jam & Wi-Fi super cepat',
                ]
            ],
        ];
    @endphp

    @foreach ($rawatInap as $index => $kamar)
        <div class="row align-items-center mb-5 {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }}">
            <div class="col-md-6">
                <img src="{{ asset('../images/' . $kamar['icon']) }}" alt="{{ $kamar['title'] }}" class="img-fluid rounded shadow-sm animated-image" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">{{ $kamar['title'] }}</h3>
                <p class="text-muted">{{ $kamar['desc'] }}</p>
                <ul class="list-unstyled">
                    @foreach ($kamar['fasilitas'] as $fasilitas)
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i> {{ $fasilitas }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
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
