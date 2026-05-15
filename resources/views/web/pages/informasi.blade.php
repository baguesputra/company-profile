@extends('web.layouts.app')

@section('content')
<section class="layanan-unggulan-hero">
   <div class="container">
        <h2 class="judul-layanan-unggulan">Informasi</h2>
        <p class="deskripsi-layanan-unggulan">
            Rumah Sakit Amanah Medical Centre menghadirkan layanan unggulan dengan fasilitas modern 
            dan tenaga medis profesional untuk memberikan pelayanan terbaik kepada pasien.
        </p>
    </div>
</section> 
<section class="artikel-section">
    <div class="container">
        <div class="artikel-grid">
            @foreach ($artikels as $artikel)
                <div class="artikel-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <img src="{{ asset('../images/' . $artikel->image) }}" class="artikel-img" alt="{{ $artikel->title }}">
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

        <!-- Custom Pagination -->
        <div class="d-flex justify-content-center mt-5">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    @if ($artikels->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $artikels->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                    @endif

                    @foreach ($artikels->getUrlRange(1, $artikels->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $artikels->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($artikels->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $artikels->nextPageUrl() }}" rel="next">&raquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
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
