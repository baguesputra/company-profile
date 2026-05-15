@extends('web.layouts.app')

@section('content')
<section class="layanan-unggulan-hero">
    <div class="container">
        <h2 class="judul-layanan-unggulan">Karir</h2>
        <p class="deskripsi-layanan-unggulan">
           Bergabunglah bersama kami untuk membangun masa depan yang lebih baik di bidang kesehatan.
        </p>
    </div>
</section>
<section id="karir" class="section karir-section" data-aos="fade-up">
    <div class="container">
       
        <!-- Daftar Lowongan -->
        <div class="job-list">
            @foreach($karirs as $karir)
                <div class="job-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="job-header">
                        <div class="job-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4 class="job-title">{{ $karir->title }}</h4>
                    </div>

                    <div class="job-meta">
                        <p class="job-location">
                            <i class="fas fa-map-marker-alt"></i> {{ $karir->location }}
                        </p>
                        @if($karir->application_deadline)
                        <p class="job-deadline">
                            <i class="fas fa-calendar-alt"></i> Deadline: {{ $karir->application_deadline->format('d M Y') }}
                        </p>
                        @endif
                    </div>

                    <span class="job-status {{ $karir->status }}">
                        <i class="fas fa-circle"></i> {{ $karir->status === 'open' ? 'Terbuka' : 'Ditutup' }}
                    </span>

                    @if($karir->description)
                    <p class="job-description">{{ Str::limit($karir->description, 120) }}</p>
                    @endif

                    @if($karir->status === 'open')
                        <a href="{{ route('web.karir.detail', $karir->id) }}" class="btn-detail">
                            <i class="fas fa-eye"></i> Lihat Detail
                        </a>
                    @else
                        <a href="#" class="btn-detail disabled" aria-disabled="true">
                            <i class="fas fa-lock"></i> Ditutup
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>

    </script>
@endsection
