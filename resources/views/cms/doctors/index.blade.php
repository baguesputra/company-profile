@extends('cms.layouts.app')

@section('page_title', 'Kelola Dokter')

@section('header_action')
    <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary btn-sm shadow-sm d-inline-flex align-items-center">
        <i class="fas fa-plus mr-2"></i> Tambah Dokter
    </a>
@endsection

@section('content')
<style>
    .img-preview {
        cursor: pointer;
        transition: transform 0.2s, opacity 0.2s;
    }
    .img-preview:hover {
        transform: scale(1.05);
        opacity: 0.8;
    }
    .modal-content {
        border: none;
        border-radius: 15px;
        overflow: hidden;
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
            Daftar Tenaga Medis
        </span>
        <div class="input-group input-group-sm" style="width: 250px;">
            <div class="input-group-prepend">
                <span class="input-group-text bg-light border-right-0">
                    <i class="fas fa-search text-muted"></i>
                </span>
            </div>
            <input type="text" id="searchDokter" class="form-control border-left-0 bg-light"
                   placeholder="Cari nama atau poli..." onkeyup="filterDokter()">
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="tableDokter">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0 text-muted small py-3" style="width: 50px; padding-left: 20px;">NO</th>
                        <th class="border-0 text-muted small py-3">DOKTER</th>
                        <th class="border-0 text-muted small py-3">POLIKLINIK</th>
                        <th class="border-0 text-muted small py-3" style="width: 120px;">STATUS</th>
                        <th class="border-0 text-muted small py-3 text-center" style="width: 80px;">FOTO</th>
                        <th class="border-0 text-muted small py-3 text-right" style="width: 120px; padding-right: 20px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($doctors as $index => $doctor)
                        <tr>
                            <td class="align-middle text-muted small" style="padding-left: 20px;">{{ $index + 1 }}</td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center mr-3 bg-primary text-white shadow-sm"
                                         style="width:35px; height:35px; font-size:12px; font-weight:600;">
                                        {{ strtoupper(substr($doctor->name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <div class="font-weight-bold text-dark mb-0" style="font-size:14px;">{{ $doctor->name }}</div>
                                        <small class="text-muted">ID: #{{ str_pad($doctor->id, 3, '0', STR_PAD_LEFT) }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-muted" style="font-size:13px;">{{ $doctor->poli }}</td>
                            <td class="align-middle">
                                @if($doctor->status == 1)
                                    <span class="badge badge-pill badge-light text-success border px-2 py-1">
                                        <i class="fas fa-circle mr-1" style="font-size: 8px;"></i> Aktif
                                    </span>
                                @else
                                    <span class="badge badge-pill badge-light text-danger border px-2 py-1">
                                        <i class="fas fa-circle mr-1" style="font-size: 8px;"></i> Non-Aktif
                                    </span>
                                @endif
                            </td>
                            <td class="align-middle text-center">
                                @if(!empty($doctor->image))
                                    <img src="{{ asset('../images/dokter/' . $doctor->image) }}"
                                         class="img-preview shadow-sm border"
                                         width="40" height="40" 
                                         alt="{{ $doctor->name }}"
                                         data-toggle="modal" data-target="#imageModal"
                                         data-url="{{ asset('../images/dokter/' . $doctor->image) }}"
                                         data-title="{{ $doctor->name }}"
                                         style="object-fit:cover; border-radius:8px;">
                                @else
                                    <div class="rounded bg-light d-flex align-items-center justify-content-center text-muted border"
                                         style="width:40px;height:40px;font-size:10px;">NA</div>
                                @endif
                            </td>
                            <td class="align-middle text-right" style="padding-right: 20px;">
                                <div class="btn-group border rounded shadow-sm">
                                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-white btn-sm px-3 border-right" title="Edit">
                                        <i class="fas fa-pencil-alt text-primary"></i>
                                    </a>
                                    <form action="{{ route('admin.doctors.delete', $doctor->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-white btn-sm px-3" title="Hapus" 
                                                onclick="return confirm('Hapus data dokter ini?')">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" width="80" class="mb-3 opacity-50">
                                <p class="mb-0">Tidak ada data dokter ditemukan.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Preview Foto -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-transparent border-0 shadow-none">
            <div class="modal-header border-0 p-0">
                <!-- Tombol Close yang lebih besar dan jelas -->
                <button type="button" class="close text-white opacity-100" data-dismiss="modal" aria-label="Close" 
                        style="position: fixed; top: 20px; right: 30px; font-size: 3rem; font-weight: 300; z-index: 10000;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0 text-center">
                <img src="" id="modalImage" class="img-fluid rounded shadow-lg" 
                     style="max-height: 85vh; border: 5px solid white;">
                <div id="modalCaption" class="mt-3 text-white h5 font-weight-light"></div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(document).ready(function() {
    // Saat gambar di tabel diklik
    $('.img-preview').on('click', function() {
        const url = $(this).data('url');
        const title = $(this).data('title');
        
        $('#modalImage').attr('src', url);
        $('#modalCaption').text(title);
        $('#imageModal').modal('show');
    });

    // Opsional: Memastikan modal menutup sempurna saat tombol X diklik
    $('.modal .close').on('click', function() {
        $('#imageModal').modal('hide');
    });
});

// Fungsi filter pencarian tetap sama
function filterDokter() {
    const input = document.getElementById('searchDokter').value.toLowerCase();
    const rows = document.querySelectorAll('#tableDokter tbody tr');
    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? '' : 'none';
    });
}
</script>
@endpush
@endsection