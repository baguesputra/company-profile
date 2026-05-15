@extends('web.layouts.app')

@section('content')
<style>
/* Hero Section */
.artikel-hero {
    position: relative;
    background: url('../public/images/gedung_amc.jpg') no-repeat center center;
    background-size: cover;
    min-height: 300px;
    color: #fff;
    padding: 80px 20px;
}

.artikel-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(211, 119, 57, 0.83); /* overlay orange transparan */
}

.artikel-hero .container {
    position: relative;
    z-index: 2;
}

.judul-artikel {
    font-size: 2.5rem;
    font-weight: 700;
    color: #fff;
}

.deskripsi-artikel {
    font-size: 1.2rem;
    margin: 0 auto;
    color: #fff;
}

/* Artikel Content */
.artikel-content {
    padding: 60px 20px;
    background-color: #f9f9f9;
}

.artikel-main {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0,0,0,0.1);
}

.artikel-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.artikel-body {
    padding: 40px;
}

.artikel-title {
    font-size: 2.2rem;
    font-weight: bold;
    color: #2a7f62;
    margin-bottom: 20px;
}

.artikel-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.artikel-date {
    font-size: 0.9rem;
    color: #666;
}

.artikel-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #333;
    margin-bottom: 40px;
}

.artikel-text p {
    margin-bottom: 20px;
}

.artikel-text h3 {
    color: #2a7f62;
    margin-top: 30px;
    margin-bottom: 15px;
    font-size: 1.4rem;
}

/* Related Articles */
.related-articles {
    padding: 60px 20px;
    background-color: #fff;
}

.related-title {
    font-size: 2rem;
    font-weight: bold;
    color: #2a7f62;
    text-align: center;
    margin-bottom: 40px;
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.related-card {
    background-color: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
}

.related-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 32px rgba(0,0,0,0.15);
}

.related-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.related-content {
    padding: 20px;
}

.related-title-small {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2a7f62;
    margin-bottom: 10px;
}

.related-description {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 15px;
}

.related-date {
    font-size: 0.8rem;
    color: #999;
}

/* Back Button */
.back-btn {
    display: inline-block;
    padding: 12px 24px;
    background-color: #2a7f62;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin-bottom: 20px;
}

.back-btn:hover {
    background-color: #1e5f4a;
    color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
    .artikel-hero {
        padding: 60px 20px;
    }

    .judul-artikel {
        font-size: 2rem;
    }

    .deskripsi-artikel {
        font-size: 1rem;
    }

    .artikel-body {
        padding: 20px;
    }

    .artikel-title {
        font-size: 1.8rem;
    }

    .related-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}
</style>

<section class="artikel-hero">
    <div class="container">
        <h2 class="judul-artikel">{{ $artikel->title }}</h2>
        <p class="deskripsi-artikel">{{ $artikel->description }}</p>
    </div>
</section>

<section class="artikel-content">
    <div class="container">
        <a href="{{ route('web.informasi') }}" class="back-btn">← Kembali ke Daftar Artikel</a>

        <div class="artikel-main">
            <img src="{{ asset('images/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="artikel-image">
            <div class="artikel-body">
                <h1 class="artikel-title">{{ $artikel->title }}</h1>
                <div class="artikel-meta">
                    <span class="artikel-date">Dipublikasikan pada {{ \Carbon\Carbon::parse($artikel->published_date)->format('d M Y') }}</span>
                </div>
                <div class="artikel-text">
                    {!! nl2br(e($artikel->content)) !!}
                </div>
            </div>
        </div>
    </div>
</section>

@if($relatedArtikels->count() > 0)
<section class="related-articles">
    <div class="container">
        <h2 class="related-title">Artikel Terkait</h2>
        <div class="related-grid">
            @foreach($relatedArtikels as $related)
            <a href="{{ route('web.artikel.detail', $related->id) }}" class="related-card">
                <img src="{{ asset('images/' . $related->image) }}" alt="{{ $related->title }}" class="related-image">
                <div class="related-content">
                    <h3 class="related-title-small">{{ $related->title }}</h3>
                    <p class="related-description">{{ Str::limit($related->description, 100) }}</p>
                    <small class="related-date">{{ \Carbon\Carbon::parse($related->published_date)->format('d M Y') }}</small>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>
@endsection
