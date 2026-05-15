<!-- Footer -->
<footer class="footer pt-5">
  <div class="container">
    <div class="row gy-4">
      <!-- Lokasi -->
      <div class="col-12 col-md-6 col-lg-4">
        <h5 class="fw-bold mb-3">Lokasi Kami</h5>
        <div class="map-responsive rounded shadow-sm mb-3">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d974.102810114785!2d114.5866045284801!3d-3.3249058027887597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a8952504db%3A0x1e5fedd85abfd55f!2sPT%20PP%20PROYEK%20RS%20AMANAH%20MEDICAL%20CENTRE!5e0!3m2!1sen!2sid!4v1738569340565!5m2!1sen!2sid"
            style="border:0; width: 100%; height: 250px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <p class="small">Jl. M.T. Haryono No.21, Kertak Baru Ilir, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70111</p>
      </div>

      <!-- Hubungi Kami -->
      <div class="col-12 col-md-6 col-lg-3">
        <h5 class="fw-bold mb-3">Hubungi Kami</h5>
        <ul class="list-unstyled footer-contact">
          <li>
            <i class="bi bi-truck"></i>
            <span>Ambulans & Gawat Darurat <br><strong>0511-7903699</strong></span>
          </li>
          <li>
            <i class="bi bi-telephone"></i>
            <span>Pusat Panggilan <br><strong>0511-7903688</strong></span>
          </li>
          <li>
            <i class="bi bi-whatsapp"></i>
            <span>WhatsApp: <strong>628115193088</strong></span>
          </li>
          <li>
            <i class="bi bi-envelope"></i>
            <span>amc.hospital@amanahmedicalcentre.co.id</span>
          </li>
        </ul>
      </div>

      <!-- Tentang Kami -->
      <div class="col-6 col-md-3 col-lg-2">
        <h5 class="fw-bold mb-3">Tentang Kami</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="{{ route('web.profile') }}">Kenapa RS AMC</a></li>
          <li><a href="{{ route('web.profile') }}">Profil Perusahaan</a></li>
          <li><a href="{{ route('web.mutu') }}">Indikator Mutu</a></li>
        </ul>
      </div>

      <!-- Jalur Cepat -->
      <div class="col-6 col-md-3 col-lg-3">
        <h5 class="fw-bold mb-3">Jalur Cepat</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="{{ route('web.karir') }}">Karir</a></li>
          <li><a href="{{ route('web.informasi') }}">Berita</a></li>
          <li><a href="{{ route('web.layanan_medis') }}">Layanan</a></li>
          <li><a href="{{ route('web.faq') }}">FAQ</a></li>
          <li><a href="{{ route('web.promo') }}">Promo Spesial</a></li>
          <li><a href="{{ route('web.kritik_saran') }}">Kontak Kami</a></li>
          <li><a href="{{ route('web.pengumuman') }}">Acara</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom -->
    <div class="border-top pt-3 mt-4 text-center">
      <div class="d-flex justify-content-center gap-3 mb-3">
        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
      </div>
      <small>© 2025 Rumah Sakit Amanah Medical Centre. All rights reserved.</small>
    </div>
  </div>
</footer>

<style>
.footer {
  background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
  color: white;
  padding-bottom: 2rem;
}

.footer h5 {
  color: #fff;
  font-size: 1.1rem;
}

.footer a {
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer a:hover {
  color: #fff;
}

.footer-contact li {
  display: flex;
  align-items: flex-start;
  margin-bottom: 1rem;
}

.footer-contact i {
  margin-right: 0.75rem;
  margin-top: 0.25rem;
  color: #fff;
  font-size: 1.2rem;
}

.footer-contact span {
  font-size: 0.9rem;
  line-height: 1.4;
}

.footer-links li {
  margin-bottom: 0.5rem;
}

.social-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  transition: all 0.3s ease;
}

.social-icon:hover {
  background: #fff;
  color: #28a745;
  transform: translateY(-2px);
}

.social-icon i {
  font-size: 1.2rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .footer {
    padding-top: 3rem;
    padding-bottom: 1.5rem;
  }

  .footer h5 {
    font-size: 1rem;
    margin-bottom: 1rem;
  }

  .footer-contact li {
    margin-bottom: 0.75rem;
  }

  .footer-contact i {
    font-size: 1rem;
    margin-right: 0.5rem;
  }

  .footer-contact span {
    font-size: 0.85rem;
  }

  .footer-links li {
    margin-bottom: 0.4rem;
  }

  .social-icon {
    width: 35px;
    height: 35px;
  }

  .social-icon i {
    font-size: 1rem;
  }

  .map-responsive iframe {
    height: 200px;
  }
}

@media (max-width: 576px) {
  .footer {
    padding-top: 2rem;
  }

  .footer h5 {
    font-size: 0.95rem;
  }

  .footer-contact li {
    margin-bottom: 0.5rem;
  }

  .footer-contact span {
    font-size: 0.8rem;
  }

  .footer-links a {
    font-size: 0.85rem;
  }

  .social-icon {
    width: 30px;
    height: 30px;
  }

  .social-icon i {
    font-size: 0.9rem;
  }

  .map-responsive iframe {
    height: 180px;
  }
}
</style>






<!-- Documentation -->
<!--
1. Struktur HTML menggunakan Bootstrap untuk tata letak yang responsif.
2. Elemen "container" memastikan konten terpusat dan memiliki padding default.
3. Kolom dibagi menjadi dua bagian menggunakan kelas "col-md-6":
   - Kolom pertama untuk informasi tentang Amanah Medical Centre.
   - Kolom kedua untuk tautan media sosial.
4. "social-media" berisi tautan dengan kelas "me-3" untuk jarak antar tautan.
5. Elemen <hr> digunakan sebagai pemisah visual antara konten utama dan bagian hak cipta.
6. Paragraf hak cipta berada di tengah dengan teks berwarna muted.
7. Atribut "aria-label" ditambahkan ke tautan untuk meningkatkan aksesibilitas.
-->