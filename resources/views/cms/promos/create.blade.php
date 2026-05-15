@extends('cms.layouts.app')

@section('page_title')

@section('content')
<style>
    .form-label-custom {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        color: #94a3b8;
        letter-spacing: 0.025em;
        margin-bottom: 0.5rem;
    }
    .promo-preview-box {
        width: 100%;
        height: 200px;
        border: 2px dashed #e2e8f0;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: #f8fafc;
    }
    .promo-preview-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h1 class="h4 mb-0 font-weight-bold text-dark">Buat Promo</h1>
        <p class="text-muted small mb-0">Tambahkan penawaran atau diskon layanan medis terbaru.</p>
    </div>
    <a href="{{ route('admin.promos') }}" class="btn btn-sm btn-white border shadow-sm px-3">
        <i class="fas fa-arrow-left mr-1"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger border-0 shadow-sm mb-4" role="alert">
        <div class="d-flex">
            <i class="fas fa-exclamation-triangle mt-1 mr-3"></i>
            <div>
                <span class="font-weight-bold">Mohon periksa kembali:</span>
                <ul class="mb-0 small mt-1 pl-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<form action="{{ route('admin.promos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        {{-- Sisi Kiri: Detail Promo --}}
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="form-group mb-4">
                        <label class="form-label-custom">Judul Promo <span class="text-danger">*</span></label>
                        <input type="text" name="title" value="{{ old('title') }}" 
                               class="form-control border-light-200 @error('title') is-invalid @enderror" 
                               placeholder="Contoh: Paket Medical Check Up Merdeka" required>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label-custom">Deskripsi Lengkap <span class="text-danger">*</span></label>
                        <textarea name="description" rows="5" 
                                  class="form-control border-light-200 @error('description') is-invalid @enderror" 
                                  placeholder="Tuliskan detail promo, syarat, dan ketentuan..." required>{{ old('description') }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label class="form-label-custom">Harga Promo (Rp) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light border-light-200">Rp</span>
                                </div>
                                <input type="number" name="price" value="{{ old('price') }}" 
                                       class="form-control border-light-200 @error('price') is-invalid @enderror" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label-custom">Berlaku Hingga <span class="text-danger">*</span></label>
                            <input type="date" name="valid_until" value="{{ old('valid_until') }}" 
                                   class="form-control border-light-200 @error('valid_until') is-invalid @enderror" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sisi Kanan: Media & Status --}}
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <label class="form-label-custom">Banner Promo</label>
                    <div class="promo-preview-box mb-3" id="imagePreviewBox">
                        <div class="text-center text-muted p-3">
                            <i class="fas fa-image fa-2x mb-2 opacity-50"></i>
                            <p class="small mb-0">Belum ada gambar dipilih</p>
                        </div>
                    </div>
                    
                    <div class="custom-file">
                        <input type="file" name="image" id="promoImage" accept="image/*"
                               class="custom-file-input @error('image') is-invalid @enderror"
                               onchange="previewImage(this)" required>
                        <label class="custom-file-label border-light-200" for="promoImage">Pilih Banner</label>
                    </div>
                    <small class="text-muted mt-2 d-block" style="font-size: 11px;">
                        Rasio ideal 16:9. Maksimal 2MB.
                    </small>

                    <hr class="my-4">

                    <label class="form-label-custom">Status Publikasi</label>
                    <div class="p-3 rounded border bg-light">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold text-dark" for="is_active" style="cursor: pointer;">Aktifkan Promo</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-0 p-4 pt-0">
                    <button type="submit" class="btn btn-primary btn-block shadow-sm py-2">
                        <i class="fas fa-save mr-1"></i> Simpan Promo
                    </button>
                    <a href="{{ route('admin.promos') }}" class="btn btn-link btn-block text-muted small">Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>

@push('scripts')
<script>
function previewImage(input) {
    const previewBox = document.getElementById('imagePreviewBox');
    const label = input.nextElementSibling;
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        label.textContent = input.files[0].name;
        
        reader.onload = function(e) {
            previewBox.innerHTML = `<img src="${e.target.result}" alt="Preview Promo">`;
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        label.textContent = 'Pilih Banner';
        previewBox.innerHTML = `<div class="text-center text-muted p-3"><i class="fas fa-image fa-2x mb-2 opacity-50"></i><p class="small mb-0">Belum ada gambar dipilih</p></div>`;
    }
}
</script>
@endpush
@endsection