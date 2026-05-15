@extends('cms.layouts.app')

@section('page_title', 'Dashboard Overview')

@section('header_action')
    <button class="btn btn-primary btn-sm shadow-sm" onclick="window.location.reload()">
        <i class="fas fa-sync-alt mr-1"></i> Refresh Data
    </button>
@endsection

@section('content')
<style>
    .stat-card {
        border: none;
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        font-size: 1.5rem;
    }
    .timeline-item {
        border-radius: 12px !important;
        box-shadow: none !important;
        border: 1px solid #f1f1f1 !important;
        margin-left: 50px !important;
    }
</style>

<!-- Statistik Row -->
<div class="row">
    @php
        $stats = [
            ['title' => 'Total Dokter', 'value' => $totalDoctors ?? 0, 'icon' => 'fa-user-md', 'color' => 'bg-primary', 'route' => 'admin.doctors'],
            ['title' => 'Total Artikel', 'value' => $totalArticles ?? 0, 'icon' => 'fa-newspaper', 'color' => 'bg-success', 'route' => 'admin.artikels'],
            ['title' => 'Total Promo', 'value' => $totalPromos ?? 0, 'icon' => 'fa-tags', 'color' => 'bg-warning', 'route' => 'admin.promos'],
            ['title' => 'Kritik & Saran', 'value' => $totalKritikSaran ?? 0, 'icon' => 'fa-comments', 'color' => 'bg-danger', 'route' => 'admin.kritik_sarans'],
        ];
    @endphp

    @foreach($stats as $stat)
    <div class="col-lg-3 col-6 mb-4">
        <div class="card stat-card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="stat-icon {{ $stat['color'] }} text-white shadow-sm">
                        <i class="fas {{ $stat['icon'] }}"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="font-weight-bold mb-0">{{ $stat['value'] }}</h3>
                        <small class="text-muted">{{ $stat['title'] }}</small>
                    </div>
                </div>
                <a href="{{ route($stat['route']) }}" class="btn btn-light btn-block btn-sm text-muted mt-2 border-0">
                    Detail <i class="fas fa-chevron-right ml-1" style="font-size: 10px;"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row">
    <!-- Aktivitas Terbaru -->
    <div class="col-md-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3">
                <h3 class="card-title font-weight-bold">Aktivitas Terbaru</h3>
            </div>
            <div class="card-body px-0">
                <div class="timeline timeline-inverse px-3">
                    <div class="time-label">
                        <span class="bg-light px-3 py-1 text-muted border small font-weight-bold" style="border-radius: 20px;">HARI INI</span>
                    </div>
                    <div>
                        <i class="fas fa-user-plus bg-primary"></i>
                        <div class="timeline-item shadow-none">
                            <span class="time"><i class="far fa-clock"></i> 12 mins</span>
                            <h3 class="timeline-header border-0 font-weight-bold small">Dokter Baru</h3>
                            <div class="timeline-body text-muted small pt-0">
                                Dr. Ahmad Rahman telah ditambahkan.
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="fas fa-comment-alt bg-danger"></i>
                        <div class="timeline-item shadow-none">
                            <span class="time"><i class="far fa-clock"></i> 27 mins</span>
                            <h3 class="timeline-header border-0 font-weight-bold small">Feedback Pasien</h3>
                            <div class="timeline-body text-muted small pt-0">
                                Masukan baru dari portal kritik & saran.
                            </div>
                        </div>
                    </div>
                    <div><i class="far fa-dot-circle bg-gray"></i></div>
                </div>
            </div>
            <div class="card-footer bg-white text-center">
                <a href="#" class="small font-weight-bold">Lihat Semua Aktivitas</a>
            </div>
        </div>
    </div>

    <!-- Statistik Bulanan (Chart) -->
    <div class="col-md-7">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3">
                <h3 class="card-title font-weight-bold">Grafik Kunjungan</h3>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="monthlyChart" style="min-height: 315px; height: 315px; max-height: 315px; width: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('monthlyChart').getContext('2d');
    
    // Gradient Background
    var gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(67, 97, 238, 0.4)');
    gradient.addColorStop(1, 'rgba(67, 97, 238, 0)');

    var monthlyChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Kunjungan',
                fill: true,
                backgroundColor: gradient,
                borderColor: '#4361ee',
                borderWidth: 3,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#4361ee',
                pointHoverRadius: 6,
                data: [28, 48, 40, 19, 86, 27, 90, 45, 67, 89, 34, 56],
                tension: 0.4 // Membuat garis melengkung (smooth)
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    grid: { borderDash: [5, 5], drawBorder: false },
                    beginAtZero: true
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });
</script>
@endpush
@endsection