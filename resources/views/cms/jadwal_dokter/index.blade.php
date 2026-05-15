@extends('cms.layouts.app')

@section('page_title', 'Kelola Jadwal Dokter')

@section('content')
<style>
    .table-schedule thead th {
        background-color: #f8fafc;
        text-transform: uppercase;
        font-size: 10px;
        letter-spacing: 0.05em;
        color: #64748b;
        border-top: none;
        vertical-align: middle;
        text-align: center;
    }
    .table-schedule tbody td {
        vertical-align: middle;
        text-align: center;
        font-size: 13px;
    }
    .col-doctor {
        text-align: left !important;
        font-weight: 600;
        color: #1e293b;
    }
    .badge-shift {
        font-size: 10px;
        padding: 4px 8px;
        border-radius: 6px;
        font-weight: 700;
    }
    .time-slot {
        font-family: 'Monaco', 'Consolas', monospace;
        font-size: 11px;
        color: #475569;
        background: #f1f5f9;
        padding: 2px 4px;
        border-radius: 4px;
    }
    .empty-slot {
        color: #cbd5e1;
        font-size: 18px;
    }
</style>

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h1 class="h4 mb-0 font-weight-bold text-dark">Jadwal Praktek Dokter</h1>
        <p class="text-muted small mb-0">Manajemen waktu shift dan ketersediaan dokter mingguan.</p>
    </div>
    <a href="{{ route('admin.jadwal_dokter.create') }}" class="btn btn-primary shadow-sm px-3">
        <i class="fas fa-plus mr-1"></i> Tambah Jadwal
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success border-0 shadow-sm mb-4 d-flex align-items-center">
        <i class="fas fa-check-circle mr-2"></i>
        <div>{{ session('success') }}</div>
        <button type="button" class="close ml-auto" data-dismiss="alert">&times;</button>
    </div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3">
        <div class="d-flex align-items-center justify-content-between">
            <h3 class="card-title font-weight-bold m-0" style="font-size: 15px;">Daftar Jadwal Terdaftar</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" class="form-control border-light-200" placeholder="Cari dokter...">
                    <div class="input-group-append">
                        <button class="btn btn-light border-light-200"><i class="fas fa-search text-muted"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-schedule m-0">
                <thead>
                    <tr>
                        <th width="50">ID</th>
                        <th class="text-left">Nama Dokter</th>
                        <th>Shift</th>
                        <th>Sen</th>
                        <th>Sel</th>
                        <th>Rab</th>
                        <th>Kam</th>
                        <th>Jum</th>
                        <th>Sab</th>
                        <th>Min</th>
                        <th width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jadwalDokters as $jadwal)
                        <tr>
                            <td class="text-muted small">#{{ $jadwal->id }}</td>
                            <td class="col-doctor">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm mr-2 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width:30px; height:30px;">
                                        <i class="fas fa-user-md text-primary" style="font-size: 14px;"></i>
                                    </div>
                                    {{ $jadwal->doctor->name ?? 'N/A' }}
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-shift {{ strtolower($jadwal->FMJShift) == 'pagi' ? 'bg-info-light text-info' : 'bg-warning-light text-warning' }}" style="background-color: #e0f2fe; color: #0369a1;">
                                    {{ $jadwal->FMJShift }}
                                </span>
                            </td>
                            @foreach(['01', '02', '03', '04', '05', '06', '07'] as $dayNum)
                                @php $field = "FMJHari".$dayNum; @endphp
                                <td>
                                    @if($jadwal->$field && $jadwal->$field != '-')
                                        <span class="time-slot">{{ $jadwal->$field }}</span>
                                    @else
                                        <span class="empty-slot">&middot;</span>
                                    @endif
                                </td>
                            @endforeach
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.jadwal_dokter.edit', $jadwal->id) }}" 
                                       class="btn btn-link btn-sm text-warning p-1" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('admin.jadwal_dokter.destroy', $jadwal->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link btn-sm text-danger p-1" 
                                                onclick="return confirm('Hapus jadwal ini?')" title="Hapus">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="py-5 text-muted">
                                <i class="fas fa-calendar-times fa-3x mb-3 d-block opacity-20"></i>
                                Belum ada data jadwal dokter.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer bg-white border-top-0 py-3">
        <p class="small text-muted mb-0">Menampilkan <strong>{{ $jadwalDokters->count() }}</strong> jadwal aktif.</p>
    </div>
</div>
@endsection