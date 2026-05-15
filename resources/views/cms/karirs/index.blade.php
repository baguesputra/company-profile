@extends('cms.layouts.app')

@section('page_title', 'Manajemen Karir')

@section('header_action')
    <a href="{{ route('admin.karirs.create') }}" class="btn btn-primary btn-sm shadow-sm d-inline-flex align-items-center">
        <i class="fas fa-plus mr-2"></i> Tambah Lowongan
    </a>
@endsection

@section('content')
<style>
    .job-title {
        font-size: 14px;
        font-weight: 600;
        color: #1a1a1a;
    }
    .location-tag {
        font-size: 12px;
        color: #6c757d;
    }
    .deadline-text {
        font-size: 13px;
    }
    .badge-status {
        font-size: 11px;
        padding: 5px 12px;
        border-radius: 20px;
        font-weight: 500;
    }
</style>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
        <i class="fas fa-check-circle mr-2"></i>
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-header bg-white d-flex align-items-center justify-content-between py-3">
        <span class="text-uppercase text-muted font-weight-bold" style="font-size: 11px; letter-spacing: .05em;">
            Daftar Lowongan Pekerjaan
        </span>
        <div class="input-group input-group-sm" style="width: 250px;">
            <div class="input-group-prepend">
                <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" id="searchKarir" class="form-control bg-light border-0" 
                   placeholder="Cari posisi atau lokasi..." onkeyup="filterKarir()">
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="tableKarir">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0 text-muted small py-3" style="width: 50px; padding-left: 20px;">ID</th>
                        <th class="border-0 text-muted small py-3">POSISI & LOKASI</th>
                        <th class="border-0 text-muted small py-3">DEADLINE</th>
                        <th class="border-0 text-muted small py-3">STATUS</th>
                        <th class="border-0 text-muted small py-3 text-right" style="width: 120px; padding-right: 20px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($karirs as $karir)
                        <tr>
                            <td class="align-middle text-muted small" style="padding-left: 20px;">
                                #{{ $karir->id }}
                            </td>
                            <td class="align-middle">
                                <div class="job-title">{{ $karir->title }}</div>
                                <div class="location-tag">
                                    <i class="fas fa-map-marker-alt fa-xs mr-1 text-danger"></i> {{ $karir->location }}
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="deadline-text font-weight-medium {{ $karir->application_deadline->isPast() ? 'text-danger' : 'text-dark' }}">
                                    <i class="far fa-clock mr-1"></i>
                                    {{ $karir->application_deadline->format('d M Y') }}
                                </div>
                                @if($karir->application_deadline->isPast())
                                    <small class="text-danger font-italic">Sudah lewat</small>
                                @endif
                            </td>
                            <td class="align-middle">
                                @if($karir->status == 'open')
                                    <span class="badge-status bg-success-light text-success" style="background: #ecfdf5;">
                                        <i class="fas fa-check-circle mr-1"></i> Open
                                    </span>
                                @else
                                    <span class="badge-status bg-secondary-light text-muted" style="background: #f3f4f6;">
                                        <i class="fas fa-times-circle mr-1"></i> Closed
                                    </span>
                                @endif
                            </td>
                            <td class="align-middle text-right" style="padding-right: 20px;">
                                <div class="btn-group border rounded shadow-sm bg-white">
                                    <a href="{{ route('admin.karirs.edit', $karir->id) }}" class="btn btn-white btn-sm px-3 border-right" title="Edit">
                                        <i class="fas fa-pencil-alt text-primary"></i>
                                    </a>
                                    <form action="{{ route('admin.karirs.delete', $karir->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-white btn-sm px-3" 
                                                onclick="return confirm('Hapus lowongan ini?')" title="Hapus">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">
                                <i class="fas fa-briefcase fa-3x mb-3 opacity-20"></i>
                                <p>Tidak ada lowongan pekerjaan aktif.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Search Filter untuk Karir
function filterKarir() {
    const input = document.getElementById('searchKarir').value.toLowerCase();
    const rows = document.querySelectorAll('#tableKarir tbody tr');
    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? '' : 'none';
    });
}
</script>
@endpush
@endsection