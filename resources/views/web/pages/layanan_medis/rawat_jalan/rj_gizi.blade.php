@extends('web.layouts.app')

@section('content')
<style>
/* Hero Section */
.layanan-unggulan-hero {
    position: relative;
    background: url('../images/gedung_amc.jpg') no-repeat center center;
    background-size: cover;
    min-height: 300px;
    color: #fff;
    padding: 80px 20px;
}

.layanan-unggulan-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(211, 119, 57, 0.83); /* overlay orange transparan */
}

.layanan-unggulan-hero .container {
    position: relative;
    z-index: 2;
}

.judul-layanan-unggulan {
    font-size: 2.5rem;
    font-weight: 700;
    color :#fff;
}

.deskripsi-layanan-unggulan {
    font-size: 1.2rem;
    margin: 0 auto;
    color: #fff;
}

/* Service Cards */
.layanan-card {
    padding: 15px;
    border-radius: 15px;
    background: #fff;
    box-shadow: 0 4px 18px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.layanan-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    background: linear-gradient(135deg, #ffffff, #f9fcf9);
}

.layanan-card .card-image {
    width: 100%;
    height: 120px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 15px;
    position: relative;
}

.layanan-card .card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.layanan-card:hover .card-image img {
    transform: scale(1.05);
}

.layanan-card h5 {
    color: #007b3f;
    margin-bottom: 8px;
    font-size: 1rem;
    transition: color 0.3s ease;
    flex-grow: 1;
}

.layanan-card:hover h5 {
    color: #ff7f00;
}

.layanan-card p {
    font-size: 0.85rem;
    line-height: 1.4;
    margin-bottom: 0;
}
</style>

<section class="layanan-unggulan-hero">
   <div class="container">
        <h2 class="judul-layanan-unggulan">Poliklinik Gizi</h2>
        <p class="deskripsi-layanan-unggulan">
            Rumah Sakit Amanah Medical Centre menghadirkan layanan unggulan dengan fasilitas modern
            dan tenaga medis profesional untuk memberikan pelayanan terbaik kepada pasien.
        </p>
    </div>
</section>

<section id="spesialis-medik" class="container my-5">

</section>

@endsection
