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

  .daftar-dokter {
    background-color: #f8f9fa;
}

.search-filter-box {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

#searchName, #filterPoli {
    border-radius: 8px;
    padding: 12px;
}

/* Removed styles for #searchBtn for cleaner UI */

.doctor-card .card {
    border: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 12px;
    cursor: pointer;
}

.doctor-card .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

.doctor-card img {
    height: 200px;
    object-fit: contain;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.doctor-card a {
    color: inherit;
    text-decoration: none;
}


</style>

<section class="daftar-dokter py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-success fw-bold">Daftar Dokter</h2>

        <!-- Form Pencarian & Filter -->
        <div class="search-filter-box shadow-sm p-4 rounded mb-4 bg-white">
            <div class="row g-3">
                <div class="col-md-8">
                    <input type="text" id="searchName" class="form-control" placeholder="Cari nama dokter...">
                </div>
                <div class="col-md-4">
                    <select id="filterPoli" class="form-select">
                        <option value="">Semua Poli</option>
                        <option value="SPESIALIS ANAK">SPESIALIS ANAK</option>
                        <option value="SPESIALIS PENYAKIT DALAM">SPESIALIS PENYAKIT DALAM</option>
                        <option value="SPESIALIS PARU">SPESIALIS PARU</option>
                        <option value="SPESIALIS MATA">SPESIALIS MATA</option>
                        <option value="SPESIALIS TELINGA HIDUNG & TENGGOROKAN">SPESIALIS TELINGA HIDUNG & TENGGOROKAN</option>
                        <option value="SPESIALIS KULIT & KELAMIN">SPESIALIS KULIT & KELAMIN</option>
                        <option value="RADIOLOGI">RADIOLOGI</option>
                        <option value="SPESIALIS JANTUNG">SPESIALIS JANTUNG</option>
                        <option value="SPESIALIS ORTOPEDI">SPESIALIS ORTOPEDI</option>
                        <option value="SPESIALIS KANDUNGAN & KEBIDANAN">SPESIALIS KANDUNGAN & KEBIDANAN</option>
                        <option value="SPESIALIS NEUROLOGI">SPESIALIS NEUROLOGI</option>
                        <option value="SPESIALIS ANDROLOGI">SPESIALIS ANDROLOGI</option>
                        <option value="SPESIALIS GIGI">SPESIALIS GIGI</option>
                        <option value="SPESIALIS BEDAH">SPESIALIS BEDAH</option>
                        <option value="LABORATORIUM">LABORATORIUM</option>
                        <option value="SPESIALIS REHAB MEDIK">SPESIALIS REHAB MEDIK</option>
                        <option value="SPESIALIS KEJIWAAN">SPESIALIS KEJIWAAN</option>
                        <option value="M C U">M C U</option>
                        <option value="POLI UMUM">POLI UMUM</option>
                    </select>
                </div>
                <!-- Removed search button for cleaner UI -->
            </div>
        </div>

        <!-- Daftar Dokter -->
        <div id="doctorList" class="row g-4 d-none"> <!-- Hide dulu sebelum klik cari -->
            @foreach ($doctors as $doctor)
                <div class="col-md-4 doctor-card" data-name="{{ strtolower($doctor->name) }}" data-poli="{{ $doctor->poli }}">
            <div class="card shadow-sm h-100 doctor-card-clickable" data-doctor-id="{{ $doctor->id }}">
                <img src="{{ asset('../images/dokter/' . $doctor->image) }}" class="card-img-top" alt="{{ $doctor->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title text-success">{{ $doctor->name }}</h5>
                    <p class="card-text text-muted">{{ $doctor->poli }}</p>
                </div>
            </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Doctor Schedule Modal -->
<div id="doctorScheduleModal" class="modal">
    <div class="modal-content p-4 bg-white rounded" style="max-width: 700px; max-height: 80vh; overflow-y: auto; position: relative; margin: 60px auto;">
        <span id="closeModal" class="close">&times;</span>
        <div class="row g-4 align-items-start">
            <!-- Doctor Image -->
            <div class="col-md-4 text-center">
                <img id="modalDoctorImage" src="" alt="" class="img-fluid rounded shadow-sm" style="height: 250px; object-fit: cover;">
            </div>
            <!-- Doctor Details -->
            <div class="col-md-8">
                <h4 id="modalDoctorName" class="fw-bold text-success mb-2"></h4>
                <p id="modalDoctorPoli" class="text-muted mb-4"></p>
                <h5 class="fw-bold">Jadwal Praktik</h5>
                <ul id="scheduleList" class="list-group mb-3" style="max-height: 300px; overflow-y: auto;">
                    <!-- Filled by JS -->
                </ul>
                <div class="d-flex gap-3 mt-3">
                    <a id="modalWhatsAppLink" href="#" target="_blank" class="btn btn-success px-4 py-2 shadow-sm">Buat Janji</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function filterDoctors() {
        const searchName = document.getElementById('searchName').value.toLowerCase();
        const filterPoli = document.getElementById('filterPoli').value;
        const doctorList = document.getElementById('doctorList');
        const doctorCards = document.querySelectorAll('.doctor-card');

        doctorList.classList.remove('d-none'); // Show doctor list when filtering

        doctorCards.forEach(card => {
            const doctorName = card.dataset.name;
            const doctorPoli = card.dataset.poli;

            const nameMatch = searchName === '' || doctorName.includes(searchName);
            const poliMatch = filterPoli === '' || doctorPoli === filterPoli;

            if (nameMatch && poliMatch) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Debounce helper function to limit how often filterDoctors runs on typing
    function debounce(func, delay) {
        let debounceTimer;
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => func.apply(context, args), delay);
        }
    }

    document.getElementById('searchName').addEventListener('input', debounce(filterDoctors, 300));
    document.getElementById('filterPoli').addEventListener('change', filterDoctors);

    // Modal functionality
    const modal = document.getElementById('doctorScheduleModal');
    const closeModalBtn = document.getElementById('closeModal');
    const modalDoctorName = document.getElementById('modalDoctorName');
    const modalDoctorPoli = document.getElementById('modalDoctorPoli');
    const modalDoctorImage = document.getElementById('modalDoctorImage');
    const scheduleList = document.getElementById('scheduleList');
    const modalWhatsAppLink = document.getElementById('modalWhatsAppLink');

    // Close modal on clicking close button or outside modal content
    closeModalBtn.onclick = () => { modal.style.display = 'none'; };
    window.onclick = event => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };

    // Fetch and show doctor schedule in modal
    async function showDoctorSchedule(doctorId) {
        try {
            const response = await fetch(`{{ url('doctor-schedule') }}/${doctorId}`);
            if (!response.ok) throw new Error('Network response was not ok');
            let data = await response.json();

            modalDoctorName.textContent = data.doctor;
            modalDoctorPoli.textContent = data.poli || '';
            modalDoctorImage.src = data.image ? `{{ asset('../images/dokter/') }}/${data.image}` : '';
            modalDoctorImage.alt = data.doctor || 'Doctor Image';

            // Build WhatsApp link with dummy number or data from API
            const whatsappNumber = data.whatsapp || '628115193088';
            modalWhatsAppLink.href = `https://wa.me/${whatsappNumber}`;

            // Clear existing list
            scheduleList.innerHTML = "";

            if (!data.schedule || data.schedule.length === 0) {
                scheduleList.innerHTML = '<li class="list-group-item text-center">Jadwal belum tersedia</li>';
            } else {
                const days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                const scheduleFields = [
                    'FMJHari01', 'FMJHari02', 'FMJHari03', 'FMJHari04',
                    'FMJHari05', 'FMJHari06', 'FMJHari07'
                ];
                if (typeof data.schedule === 'object' && !Array.isArray(data.schedule)) {
                    for (let i = 0; i < scheduleFields.length; i++) {
                        let key = scheduleFields[i];
                        if (data.schedule[key] && data.schedule[key].trim() !== '') {
                            let li = document.createElement('li');
                            li.className = 'list-group-item';
                            li.textContent = `${days[i]}: ${data.schedule[key]}`;
                            scheduleList.appendChild(li);
                        }
                    }
                } else if(Array.isArray(data.schedule)) {
                    // fallback for array type schedule with day and shift fields
                    data.schedule.forEach(item => {
                        let scheduleText = item.day + ": " + item.shift;
                        let li = document.createElement('li');
                        li.className = 'list-group-item';
                        li.textContent = scheduleText;
                        scheduleList.appendChild(li);
                    });
                }
            }

            modal.style.display = 'block';
        } catch (error) {
            alert('Gagal memuat jadwal dokter.');
            console.error('Error fetching schedule:', error);
        }
    }

    // Add click event listeners to doctor cards
    document.querySelectorAll('.doctor-card-clickable').forEach(card => {
        card.addEventListener('click', () => {
            const docId = card.getAttribute('data-doctor-id');
            showDoctorSchedule(docId);
        });
    });
</script>
@endsection
