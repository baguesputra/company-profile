@extends('web.layouts.app')

@section('content')
<style>
/* Hero Section */
.layanan-unggulan-hero {
    position: relative;
    background: url('../public/images/gedung_amc.jpg') no-repeat center center;
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
    padding: 30px 20px;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 4px 18px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
}

.layanan-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 28px rgba(0,0,0,0.12);
    background: linear-gradient(135deg, #ffffff, #f9fcf9);
}

.icon-wrapper {
    width: 110px;
    height: 110px;
    margin: 0 auto 20px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(0, 155, 77, 0.1), rgba(0, 155, 77, 0.05));
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
    box-shadow: 0 4px 15px rgba(0, 155, 77, 0.15);
}

.icon-wrapper::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.layanan-card:hover .icon-wrapper {
    background: linear-gradient(135deg, rgba(255, 127, 0, 0.15), rgba(255, 127, 0, 0.08));
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(255, 127, 0, 0.2);
}

.layanan-card:hover .icon-wrapper::before {
    opacity: 1;
}

.icon-wrapper img {
    max-width: 65px;
    max-height: 65px;
    object-fit: contain;
    transition: transform 0.3s ease;
    position: relative;
    z-index: 1;
    filter: brightness(1.1) contrast(1.1);
}

.layanan-card:hover .icon-wrapper img {
    transform: scale(1.08);
    filter: brightness(1.2) contrast(1.2);
}

.layanan-card h5 {
    color: #007b3f;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.layanan-card:hover h5 {
    color: #ff7f00;
}
</style>


<section class="layanan-unggulan-hero">
    <div class="container">
        <h2 class="judul-layanan-unggulan">Profile Rumah Sakit</h2>
        <p class="deskripsi-layanan-unggulan">
            Rumah Sakit Amanah Medical Centre menghadirkan layanan unggulan dengan fasilitas modern
            dan tenaga medis profesional untuk memberikan pelayanan terbaik kepada pasien.
        </p>
    </div>
</section>

<section class="layanan-unggulan py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Foto Gedung -->
            <div class="col-md-6 mb-4">
                <div class="rounded-4 overflow-hidden shadow-sm">
                    <img src="{{ asset('../images/gedung_amc.png') }}" alt="Gedung Rumah Sakit Amanah Medical Centre" class="img-fluid">
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="col-md-6">
                <!-- <h3 class="fw-bold mb-3" style="color:#007b3f;">Tentang Rumah Sakit Amanah Medical Centre</h3> -->
                <p class="mb-3" style="font-size:1.05rem; line-height:1.7;">
                    Rumah Sakit Amanah Medical Centre merupakan fasilitas pelayanan kesehatan yang 
                    terus berkembang untuk menghadirkan layanan yang aman, profesional, dan berfokus 
                    pada keselamatan pasien. Dengan dukungan tenaga medis berpengalaman, teknologi 
                    modern, serta komitmen untuk memberikan pelayanan terbaik, AMC senantiasa menjadi 
                    pilihan utama masyarakat.
                </p>
                <p style="font-size:1.05rem; line-height:1.7;">
                    Kami terus berinovasi dalam layanan, meningkatkan mutu, dan menghadirkan pengalaman 
                    pelayanan kesehatan yang humanis, nyaman, dan berstandar tinggi bagi seluruh pasien.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-5" style="background: #f8f9f8;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold" style="color:#007b3f;">Visi & Misi Rumah Sakit</h3>
            <p class="text-muted" style="font-size:1.05rem;">
                Komitmen kami dalam memberikan pelayanan kesehatan terbaik bagi masyarakat.
            </p>
        </div>

        <div class="row g-4">

            <!-- Visi -->
            <div class="col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100" style="background:#fff;">
                    <h5 class="fw-bold mb-3" style="color:#ff7f00;">Visi</h5>
                    <p style="font-size:1.05rem; line-height:1.7;">
                        Menjadi rumah sakit yang unggul, profesional, dan terpercaya dalam memberikan pelayanan
                        kesehatan yang berorientasi pada keselamatan serta kepuasan pasien.
                    </p>
                </div>
            </div>

            <!-- Misi -->
            <div class="col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100" style="background:#fff;">
                    <h5 class="fw-bold mb-3" style="color:#ff7f00;">Misi</h5>
                    <ul style="font-size:1.05rem; line-height:1.7; padding-left:18px;">
                        <li>Menyediakan layanan kesehatan yang aman, cepat, dan berkualitas.</li>
                        <li>Meningkatkan profesionalisme tenaga kesehatan dan SDM pendukung.</li>
                        <li>Mengembangkan fasilitas dan teknologi medis sesuai standar.</li>
                        <li>Mewujudkan lingkungan rumah sakit yang nyaman, humanis, dan beretika.</li>
                        <li>Mendorong budaya kerja yang berorientasi pada mutu dan keselamatan pasien.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>



@endsection
