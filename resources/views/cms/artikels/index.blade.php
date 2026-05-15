@extends('cms.layouts.app')

@section('page_title', 'Kelola Artikel')

@section('header_action')
    <a href="{{ route('admin.artikels.create') }}" class="btn btn-primary btn-sm shadow-sm d-inline-flex align-items-center">
        <i class="fas fa-plus mr-2"></i> Tambah Artikel
    </a>
@endsection

@section('content')
<style>
    .article-thumbnail {
        cursor: pointer;
        transition: all 0.2s ease;
        border-radius: 8px;
        object-fit: cover;
    }
    .article-thumbnail:hover {
        transform: scale(1.08);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .text-description {
        font-size: 13px;
        color: #6c757d;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        white-space: normal;
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
            Manajemen Konten Edukasi
        </span>
        <div class="input-group input-group-sm" style="width: 250px;">
            <div class="input-group-prepend">
                <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" id="searchArtikel" class="form-control bg-light border-0" 
                   placeholder="Cari judul artikel..." onkeyup="filterArtikel()">
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="tableArtikel">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0 text-muted small py-3" style="width: 80px; padding-left: 20px;">COVER</th>
                        <th class="border-0 text-muted small py-3">DETAIL ARTIKEL</th>
                        <th class="border-0 text-muted small py-3">PUBLIKASI</th>
                        <th class="border-0 text-muted small py-3">STATUS</th>
                        <th class="border-0 text-muted small py-3 text-right" style="width: 120px; padding-right: 20px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($artikels as $artikel)
                        <tr>
                            <td class="align-middle" style="padding-left: 20px;">
                                @if(!empty($artikel->image))
                                    <img src="{{ asset('../images/' . $artikel->image) }}" 
                                         class="article-thumbnail border" width="60" height="45"
                                         data-toggle="modal" data-target="#artModal"
                                         data-url="{{ asset('../images/artikel/' . $artikel->image) }}"
                                         data-title="{{ $artikel->title }}">
                                @else
                                    <div class="rounded bg-light d-flex align-items-center justify-content-center text-muted border" 
                                         style="width:60px; height:45px; font-size:9px;">NO IMG</div>
                                @endif
                            </td>
                            <td class="align-middle">
                                <div class="font-weight-bold text-dark mb-1" style="font-size:14px; line-height: 1.2;">
                                    {{ $artikel->title }}
                                </div>
                                <div class="text-description">
                                    {{ strip_tags($artikel->description) }}
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="small text-dark font-weight-medium">
                                    {{ $artikel->published_date->format('d M Y') }}
                                </div>
                                <div class="text-muted" style="font-size: 11px;">Oleh: Admin</div>
                            </td>
                            <td class="align-middle">
                                @if($artikel->is_active)
                                    <span class="badge badge-pill border text-success" style="background:#f0fff4; border-color:#bbf7d0 !important;">Terbit</span>
                                @else
                                    <span class="badge badge-pill border text-muted" style="background:#f9fafb; border-color:#e5e7eb !important;">Draft</span>
                                @endif
                            </td>
                            <td class="align-middle text-right" style="padding-right: 20px;">
                                <div class="btn-group border rounded shadow-sm">
                                    <a href="{{ route('admin.artikels.edit', $artikel->id) }}" class="btn btn-white btn-sm px-3 border-right" title="Edit">
                                        <i class="fas fa-edit text-primary"></i>
                                    </a>
                                    <form action="{{ route('admin.artikels.delete', $artikel->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-white btn-sm px-3" 
                                                onclick="return confirm('Hapus artikel ini?')" title="Hapus">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">
                                <i class="fas fa-newspaper fa-3x mb-3 opacity-20"></i>
                                <p>Belum ada artikel yang dibuat.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Image Preview -->
<div class="modal fade" id="artModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-transparent border-0 shadow-none">
            <button type="button" class="close text-white" data-dismiss="modal" 
                    style="position: fixed; top: 20px; right: 30px; font-size: 3rem; z-index: 10000; opacity: 1;">
                &times;
            </button>
            <div class="modal-body p-0 text-center">
                <img src="" id="modalArtImage" class="img-fluid rounded shadow-lg" style="max-height: 80vh; border: 4px solid white;">
                <h5 id="modalArtTitle" class="text-white mt-3 font-weight-light"></h5>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(document).ready(function() {
    // Modal Image Handler
    $('.article-thumbnail').on('click', function() {
        $('#modalArtImage').attr('src', $(this).data('url'));
        $('#modalArtTitle').text($(this).data('title'));
    });
});

// Search Filter
function filterArtikel() {
    const input = document.getElementById('searchArtikel').value.toLowerCase();
    const rows = document.querySelectorAll('#tableArtikel tbody tr');
    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? '' : 'none';
    });
}
</script>
@endpush
@endsection