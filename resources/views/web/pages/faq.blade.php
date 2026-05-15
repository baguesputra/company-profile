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
    width: 100px;
    height: 100px;
    margin: 0 auto;
    border-radius: 50%;
    background: rgba(0, 155, 77, 0.08); /* soft green background */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transition: background 0.3s ease;
}

.layanan-card:hover .icon-wrapper {
    background: rgba(255, 127, 0, 0.12); /* orange accent */
}

.icon-wrapper img {
    max-height: 60px;
    transition: transform 0.3s ease;
}

.layanan-card:hover .icon-wrapper img {
    transform: scale(1.1);
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
        <h2 class="judul-layanan-unggulan">FAQ</h2>
        <p class="deskripsi-layanan-unggulan">
            Temukan jawaban atas pertanyaan umum tentang layanan Rumah Sakit Amanah Medical Centre. Jika Anda tidak menemukan jawaban yang dicari, silakan hubungi kami.
        </p>
    </div>
</section>
<section class="faq-section py-5">
    <div class="container">
      

        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                        Bagaimana cara membuat janji temu dengan dokter?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Anda dapat membuat janji temu melalui aplikasi RS AMC Mobile, telepon ke (0511) 1234567, atau datang langsung ke rumah sakit. Kami sarankan untuk membuat janji temu terlebih dahulu untuk menghindari antrian panjang.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                        Apa saja jam operasional rumah sakit?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Rumah Sakit Amanah Medical Centre beroperasi 24 jam sehari, 7 hari seminggu. Rawat jalan tersedia dari pukul 08.00 - 20.00 WIB, sedangkan layanan darurat tersedia 24 jam.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                        Apakah rumah sakit menerima asuransi?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, kami bekerja sama dengan berbagai perusahaan asuransi kesehatan seperti BPJS Kesehatan, AdMedika, BNI Life, Mandiri InHealth, dan Prudential. Silakan konfirmasi dengan bagian administrasi untuk detail lebih lanjut.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        Bagaimana prosedur pendaftaran pasien baru?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Untuk pasien baru, Anda perlu membawa KTP, kartu asuransi (jika ada), dan datang ke bagian pendaftaran. Kami akan membantu proses registrasi dan memberikan nomor rekam medis.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                        Apa saja layanan unggulan yang tersedia?
                    </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami menyediakan berbagai layanan unggulan seperti Eye Center, One Day Care, Cardiovascular Center, IVF Center, Cath Lab, Hemodialisis, dan masih banyak lagi. Kunjungi halaman Layanan Unggulan untuk informasi lengkap.
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                        Bagaimana cara mendapatkan informasi antrian?
                    </button>
                </h2>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Anda dapat melihat informasi antrian melalui aplikasi RS AMC Mobile, website kami, atau menghubungi bagian informasi di (0511) 1234567. Kami juga menyediakan layar informasi di area tunggu.
                    </div>
                </div>
            </div>

            <!-- FAQ 7 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                        Apakah ada layanan telemedicine?
                    </button>
                </h2>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, kami menyediakan layanan telemedicine melalui aplikasi RS AMC Mobile. Anda dapat berkonsultasi dengan dokter secara daring untuk kebutuhan kesehatan ringan.
                    </div>
                </div>
            </div>

            <!-- FAQ 8 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                        Bagaimana prosedur pembayaran?
                    </button>
                </h2>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami menerima pembayaran tunai, kartu debit/kredit, dan transfer bank. Untuk pasien asuransi, pembayaran akan disesuaikan dengan ketentuan masing-masing penyedia asuransi.
                    </div>
                </div>
            </div>

            <!-- FAQ 9 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                        Apa yang harus dibawa saat berkunjung ke rumah sakit?
                    </button>
                </h2>
                <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Bawalah KTP, kartu asuransi, surat rujukan (jika ada), hasil pemeriksaan sebelumnya, dan obat-obatan yang sedang dikonsumsi. Untuk rawat inap, siapkan pakaian ganti dan keperluan pribadi.
                    </div>
                </div>
            </div>

            <!-- FAQ 10 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                        Bagaimana cara menghubungi rumah sakit dalam keadaan darurat?
                    </button>
                </h2>
                <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Untuk keadaan darurat, segera datang ke IGD rumah sakit atau hubungi nomor darurat (0511) 1234567. Tim medis kami siap membantu 24 jam.
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted">Tidak menemukan jawaban yang Anda cari?</p>
            <a href="#" class="btn btn-success px-4 py-2">Hubungi Kami</a>
        </div>
    </div>
</section>
@endsection
