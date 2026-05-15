@extends('web.layouts.app')

@section('content')
<style>
/* Hero Section */
.promo-hero {
    position: relative;
    background: url('../public/images/gedung_amc.jpg') no-repeat center center;
    background-size: cover;
    min-height: 300px;
    color: #fff;
    padding: 80px 20px;
}

.promo-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(211, 119, 57, 0.83); /* overlay orange transparan */
}

.promo-hero .container {
    position: relative;
    z-index: 2;
}

.judul-promo {
    font-size: 2.5rem;
    font-weight: 700;
    color :#fff;
}

.deskripsi-promo {
    font-size: 1.2rem;
    margin: 0 auto;
    color: #fff;
}

/* Promo Cards */
.promo-cards {
    padding: 60px 20px;
    background-color: #f9f9f9;
}

.promo-section-title {
    font-size: 2.2rem;
    font-weight: bold;
    color: #2a7f62; /* Hijau Amanah */
    position: relative;
    margin-bottom: 10px;
    text-align: center;
}

.promo-section-title::after {
    content: '';
    width: 50px;
    height: 3px;
    background-color: #2a7f62;
    display: block;
    margin: 10px auto;
    border-radius: 2px;
}

.promo-subtitle {
    font-size: 1rem;
    color: #666;
    margin-bottom: 30px;
    text-align: center;
}

.promo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.promo-card {
    background-color: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
}

.promo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 32px rgba(0,0,0,0.15);
}

.promo-image {
    width: 100%;
    height: auto;
    object-fit: contain;
}

.promo-content {
    padding: 25px;
}

.promo-title {
    font-size: 1.3rem;
    font-weight: bold;
    color: #2a7f62;
    margin-bottom: 10px;
}

.promo-description {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 15px;
}

.promo-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
}

.promo-price {
    font-size: 1.2rem;
    font-weight: bold;
    color: #ff7f00;
}

.promo-period {
    font-size: 0.85rem;
    color: #999;
    background: #f0f0f0;
    padding: 4px 8px;
    border-radius: 12px;
}

.btn-promo-detail {
    display: inline-block;
    padding: 8px 16px;
    background-color: #2a7f62;
    color: #fff;
    border: none;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
    font-size: 0.9rem;
}

.btn-promo-detail:hover {
    background-color: #1e5f4a;
    color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
    .promo-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .promo-hero {
        padding: 60px 20px;
    }

    .judul-promo {
        font-size: 2rem;
    }

    .deskripsi-promo {
        font-size: 1rem;
    }
}
</style>

<section class="promo-hero">
    <div class="container">
        <h2 class="judul-promo">Promo Spesial</h2>
        <p class="deskripsi-promo">
            Dapatkan penawaran menarik dan diskon spesial untuk layanan kesehatan di Rumah Sakit Amanah Medical Centre.
        </p>
    </div>
</section>

<section class="promo-cards">
    <div class="container">
        <h2 class="promo-section-title">Daftar Promo Terbaru</h2>
        <p class="promo-subtitle">Temukan berbagai promo kesehatan yang bisa Anda manfaatkan</p>

        <div class="promo-grid">
            @foreach($promos as $promo)
            <div class="promo-card">
                <img src="{{ asset('../images/promo/' . $promo->image) }}" alt="{{ $promo->title }}" class="promo-image">
                <div class="promo-content">
                    <h3 class="promo-title">{{ $promo->title }}</h3>
                    <p class="promo-description">{{ $promo->description }}</p>
                    <div class="promo-details">
                        <!-- <span class="promo-price">Rp {{ number_format($promo->price, 0, ',', '.') }}</span> -->
                        <span class="promo-period">Berlaku s/d {{ \Carbon\Carbon::parse($promo->valid_until)->format('d M Y') }}</span>
                    </div>
                    <!-- <a href="#" class="btn-promo-detail">Lihat Detail</a> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.css"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>
@endsection
