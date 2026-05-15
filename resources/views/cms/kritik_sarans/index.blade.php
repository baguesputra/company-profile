@extends('cms.layouts.app')

@section('page_title', 'Kritik & Saran')

@section('content')
<style>
    .sender-name {
        font-size: 14px;
        font-weight: 600;
        color: #2d3748;
    }
    .msg-preview {
        font-size: 12.5px;
        color: #718096;
        max-width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .badge-status {
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 4px 10px;
        border-radius: 4px;
    }
    /* Status Belum Dibaca */
    .row-unread {
        background-color: #f8faff !important;
        border-left: 4px solid #3182ce;
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
            Feedback Masuk dari Pelanggan
        </span>
        <div class="input-group input-group-sm" style="width: 250px;">
            <div class="input-group-prepend">
                <span class="input-group-text bg-light border-0"><i class="fas fa-filter"></i></span>
            </div>
            <select class="form-control bg-light border-0" id="filterStatus" onchange="filterFeedback()">
                <option value="">Semua Status</option>
                <option value="pending">Pending</option>
                <option value="dibaca">Dibaca</option>
                <option value="ditanggapi">Ditanggapi</option>
            </select>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="tableFeedback">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0 text-muted small py-3" style="padding-left: 20px;">PENGIRIM</th>
                        <th class="border-0 text-muted small py-3">PESAN</th>
                        <th class="border-0 text-muted small py-3">JENIS</th>
                        <th class="border-0 text-muted small py-3 text-center">STATUS</th>
                        <th class="border-0 text-muted small py-3">TANGGAL</th>
                        <th class="border-0 text-muted small py-3 text-right" style="padding-right: 20px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kritikSarans as $ks)
                        <tr class="{{ $ks->status == 'pending' ? 'row-unread' : '' }}">
                            <td class="align-middle" style="padding-left: 20px;">
                                <div class="sender-name">{{ $ks->nama }}</div>
                                <div class="text-muted small">{{ $ks->email }}</div>
                            </td>
                            <td class="align-middle">
                                <div class="msg-preview italic">
                                    "{{ Str::limit($ks->pesan, 60) }}"
                                </div>
                            </td>
                            <td class="align-middle">
                                @if($ks->jenis == 'kritik')
                                    <span class="text-danger small font-weight-bold"><i class="fas fa-exclamation-circle mr-1"></i> KRITIK</span>
                                @elseif($ks->jenis == 'saran')
                                    <span class="text-info small font-weight-bold"><i class="fas fa-lightbulb mr-1"></i> SARAN</span>
                                @else
                                    <span class="text-warning small font-weight-bold"><i class="fas fa-plus-square mr-1"></i> KEDUANYA</span>
                                @endif
                            </td>
                            <td class="align-middle text-center">
                                @if($ks->status == 'pending')
                                    <span class="badge badge-status badge-secondary">Pending</span>
                                @elseif($ks->status == 'dibaca')
                                    <span class="badge badge-status badge-primary">Dibaca</span>
                                @else
                                    <span class="badge badge-status badge-success">Selesai</span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <div class="small text-dark">{{ $ks->created_at->format('d M Y') }}</div>
                                <div class="text-muted small" style="font-size: 10px;">{{ $ks->created_at->format('H:i') }} WIB</div>
                            </td>
                            <td class="align-middle text-right" style="padding-right: 20px;">
                                <div class="btn-group border rounded shadow-sm bg-white">
                                    <a href="{{ route('admin.kritik_sarans.show', $ks->id) }}" class="btn btn-white btn-sm px-3 border-right" title="Detail">
                                        <i class="fas fa-eye text-info"></i>
                                    </a>
                                    <form action="{{ route('admin.kritik_sarans.delete', $ks->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-white btn-sm px-3" 
                                                onclick="return confirm('Hapus feedback ini?')" title="Hapus">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="fas fa-inbox fa-3x mb-3 opacity-20"></i>
                                <p>Belum ada kritik atau saran masuk.</p>
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
function filterFeedback() {
    const filter = document.getElementById('filterStatus').value.toLowerCase();
    const rows = document.querySelectorAll('#tableFeedback tbody tr');
    
    rows.forEach(row => {
        const statusText = row.querySelector('.badge-status').innerText.toLowerCase();
        if (filter === "" || statusText === filter) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
</script>
@endpush
@endsection