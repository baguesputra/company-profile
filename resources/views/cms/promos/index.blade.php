@extends('cms.layouts.app')

@section('page_title', 'Kelola Promo')

@section('header_action')
    <a href="{{ route('admin.promos.create') }}" class="btn btn-primary btn-sm shadow-sm d-inline-flex align-items-center">
        <i class="fas fa-plus mr-2"></i> Tambah Promo
    </a>
@endsection

@section('content')
<style>
    .promo-img-preview {
        cursor: pointer;
        transition: all 0.2s ease;
        border: 1px solid #eee;
    }
    .promo-img-preview:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .text-truncate-2 {
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
            Daftar Promo Berjalan
        </span>
        <div class="input-group input-group-sm" style="width: 250px;">
            <input type="text" id="searchPromo" class="form-control bg-light border-0" 
                   placeholder="Cari promo..." onkeyup="filterPromo()">
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="tablePromo">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0 text-muted small py-3" style="width: 60px; padding-left: 20px;">FOTO</th>
                        <th class="border-0 text-muted small py-3">INFO PROMO</th>
                        <th class="border-0 text-muted small py-3">HARGA</th>
                        <th class="border-0 text-muted small py-3">MASA BERLAKU</th>
                        <th class="border-0 text-muted small py-3">STATUS</th>
                        <th class="border-0 text-muted small py-3 text-right" style="width: 120px; padding-right: 20px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($promos as $promo)
                        <tr>
                            <td class="align-middle" style="padding-left: 20px;">
                                @if(!empty($promo->image))
                                    <img src="{{ asset('../images/promo/' . $promo->image) }}" 
                                         class="promo-img-preview rounded" width="50" height="50"
                                         style="object-fit: cover;"
                                         data-toggle="modal" data-target="#promoModal"
                                         data-url="{{ asset('../images/promo/' . $promo->image) }}"
                                         data-title="{{ $promo->title }}">
                                @else
                                    <div class="rounded bg-light d-flex align-items-center justify-content-center text-muted" 
                                         style="width:50px; height:50px; font-size:10px;">No Img</div>
                                @endif
                            </td>
                            <td class="align-middle">
                                <div class="font-weight-bold text-dark" style="font-size:14px;">{{ $promo->title }}</div>
                                <div class="text-muted small text-truncate-2" style="max-width: 300px;">
                                    {{ $promo->description }}
                                </div>
                            </td>
                            <td class="align-middle">
                                <span class="font-weight-bold text-primary">Rp {{ number_format($promo->price, 0, ',', '.') }}</span>
                            </td>
                            <td class="align-middle small">
                                <i class="far fa-calendar-alt mr-1 text-muted"></i>
                                {{ $promo->valid_until->format('d M Y') }}
                            </td>
                            <td class="align-middle">
                                @if($promo->is_active)
                                    <span class="badge badge-pill badge-success-soft px-3 py-1" 
                                          style="background: #e1fcef; color: #15803d; font-size: 11px;">Aktif</span>
                                @else
                                    <span class="badge badge-pill badge-secondary-soft px-3 py-1"
                                          style="background: #f3f4f6; color: #4b5563; font-size: 11px;">Berakhir</span>
                                @endif
                            </td>
                            <td class="align-middle text-right" style="padding-right: 20px;">
                                <div class="btn-group border rounded shadow-sm bg-white">
                                    <a href="{{ route('admin.promos.edit', $promo->id) }}" class="btn btn-white btn-sm px-3 border-right">
                                        <i class="fas fa-pencil-alt text-primary"></i>
                                    </a>
                                    <form action="{{ route('admin.promos.delete', $promo->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-white btn-sm px-3" 
                                                onclick="return confirm('Hapus promo ini?')">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="fas fa-tags fa-3x mb-3 opacity-20"></i>
                                <p>Belum ada data promo yang tersedia.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Image Preview -->
<div class="modal fade" id="promoModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-transparent border-0 shadow-none">
            <button type="button" class="close text-white" data-dismiss="modal" 
                    style="position: fixed; top: 20px; right: 30px; font-size: 3rem; z-index: 10000;">
                &times;
            </button>
            <div class="modal-body p-0 text-center">
                <img src="" id="modalPromoImage" class="img-fluid rounded shadow-lg" style="max-height: 80vh;">
                <h5 id="modalPromoTitle" class="text-white mt-3 font-weight-light"></h5>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(document).ready(function() {
    // Modal Handler
    $('.promo-img-preview').on('click', function() {
        $('#modalPromoImage').attr('src', $(this).data('url'));
        $('#modalPromoTitle').text($(this).data('title'));
    });
});

// Search Filter
function filterPromo() {
    const input = document.getElementById('searchPromo').value.toLowerCase();
    const rows = document.querySelectorAll('#tablePromo tbody tr');
    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? '' : 'none';
    });
}
</script>
@endpush
@endsection