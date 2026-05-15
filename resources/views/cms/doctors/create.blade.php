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
    .preview-container {
        width: 100px;
        height: 100px;
        border: 2px dashed #e2e8f0;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: #f8fafc;
    }
    .preview-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h1 class="h4 mb-0 font-weight-bold text-dark">Tambah Dokter</h1>
        <p class="text-muted small mb-0">Input data dokter baru untuk ditampilkan di portal publik.</p>
    </div>
    <a href="{{ route('admin.doctors') }}" class="btn btn-sm btn-white border shadow-sm px-3">
        <i class="fas fa-arrow-left mr-1"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger border-0 shadow-sm mb-4" role="alert">
        <div class="d-flex">
            <i class="fas fa-exclamation-triangle mt-1 mr-3"></i>
            <div>
                <span class="font-weight-bold">Terjadi Kesalahan!</span>
                <ul class="mb-0 small mt-1 pl-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="form-label-custom">Nama Lengkap & Gelar <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" 
                                   class="form-control border-light-200 @error('name') is-invalid @enderror" 
                                   placeholder="Contoh: dr. John Doe, Sp.A" required>
                        </div>
                        
                        <div class="col-md-12 mb-4">
                            <label class="form-label-custom">Spesialisasi / Poli <span class="text-danger">*</span></label>
                            <input type="text" name="poli" value="{{ old('poli') }}" 
                                   class="form-control border-light-200 @error('poli') is-invalid @enderror" 
                                   placeholder="Contoh: Spesialis Anak" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label-custom">Unggah Foto Profil</label>
                            <div class="d-flex align-items-center">
                                <div class="preview-container mr-3" id="imagePreviewBox">
                                    <i class="fas fa-user fa-2x text-light"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="doctorImage" accept="image/*"
                                               class="custom-file-input @error('image') is-invalid @enderror"
                                               onchange="previewImage(this)">
                                        <label class="custom-file-label border-light-200" for="doctorImage">Pilih file...</label>
                                    </div>
                                    <small class="text-muted mt-2 d-block" style="font-size: 11px;">
                                        Rekomendasi: Rasio 1:1 (Square), Maks. 2MB (JPG, PNG).
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <label class="form-label-custom">Konfigurasi Status</label>
                    <div class="p-3 rounded border bg-light">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" {{ old('status', 1) ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold text-dark" for="status" style="cursor: pointer;">Tampilkan Dokter</label>
                        </div>
                        <p class="text-muted small mb-0 mt-2">Jika dinonaktifkan, profil dokter tidak akan muncul di website.</p>
                    </div>
                </div>
                <div class="card-footer bg-white border-0 p-4 pt-0">
                    <button type="submit" class="btn btn-primary btn-block shadow-sm py-2">
                        <i class="fas fa-save mr-1"></i> Simpan Data Dokter
                    </button>
                    <a href="{{ route('admin.doctors') }}" class="btn btn-link btn-block text-muted small">Batal & Kembali</a>
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
            previewBox.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        label.textContent = 'Pilih file...';
        previewBox.innerHTML = `<i class="fas fa-user fa-2x text-light"></i>`;
    }
}
</script>
@endpush
@endsection