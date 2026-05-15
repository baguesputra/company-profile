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
        width: 120px;
        height: 120px;
        border: 2px dashed #e2e8f0;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: #f8fafc;
        position: relative;
    }
    .preview-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .current-label {
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0,0,0,0.5);
        color: white;
        font-size: 9px;
        padding: 2px 5px;
        border-bottom-right-radius: 8px;
    }
</style>

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h1 class="h4 mb-0 font-weight-bold text-dark">Edit Dokter</h1>
        <p class="text-muted small mb-0">Memperbarui informasi untuk <strong>{{ $doctor->name }}</strong>.</p>
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
                <span class="font-weight-bold">Gagal memperbarui data:</span>
                <ul class="mb-0 small mt-1 pl-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="row">
        {{-- Kolom Kiri: Input Utama --}}
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="form-label-custom">Nama Lengkap & Gelar <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name', $doctor->name) }}" 
                                   class="form-control border-light-200 @error('name') is-invalid @enderror" required>
                        </div>
                        
                        <div class="col-md-12 mb-4">
                            <label class="form-label-custom">Spesialisasi / Poli <span class="text-danger">*</span></label>
                            <input type="text" name="poli" value="{{ old('poli', $doctor->poli) }}" 
                                   class="form-control border-light-200 @error('poli') is-invalid @enderror" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label-custom">Foto Profil Dokter</label>
                            <div class="d-flex align-items-center">
                                <div class="preview-container mr-3" id="imagePreviewBox">
                                    <span class="current-label">Saat Ini</span>
                                    @if($doctor->image)
                                        <img src="{{ asset('images/' . $doctor->image) }}" id="imgOutput">
                                    @else
                                        <i class="fas fa-user fa-2x text-light"></i>
                                    @endif
                                </div>
                                <div class="flex-grow-1">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="doctorImage" accept="image/*"
                                               class="custom-file-input @error('image') is-invalid @enderror"
                                               onchange="previewImage(this)">
                                        <label class="custom-file-label border-light-200" for="doctorImage">Ganti foto...</label>
                                    </div>
                                    <small class="text-muted mt-2 d-block" style="font-size: 11px;">
                                        Kosongkan jika tidak ingin mengubah foto. Maks. 2MB.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom Kanan: Status & Action --}}
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <label class="form-label-custom">Konfigurasi Status</label>
                    <div class="p-3 rounded border bg-light">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" 
                                   {{ old('status', $doctor->status) == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold text-dark" for="status" style="cursor: pointer;">Status Aktif</label>
                        </div>
                        <p class="text-muted small mb-0 mt-2">Geser untuk menampilkan atau menyembunyikan dokter dari website.</p>
                    </div>
                </div>
                <div class="card-footer bg-white border-0 p-4 pt-0">
                    <button type="submit" class="btn btn-primary btn-block shadow-sm py-2">
                        <i class="fas fa-sync-alt mr-1"></i> Simpan Perubahan
                    </button>
                    <a href="{{ route('admin.doctors') }}" class="btn btn-link btn-block text-muted small">Batalkan Perubahan</a>
                </div>
            </div>
            
            <div class="alert alert-secondary border-0 small">
                <i class="fas fa-info-circle mr-1"></i> Terakhir diperbarui:<br>
                <strong>{{ $doctor->updated_at->format('d M Y, H:i') }}</strong>
            </div>
        </div>
    </div>
</form>

@push('scripts')
<script>
function previewImage(input) {
    const previewBox = document.getElementById('imagePreviewBox');
    const label = input.nextElementSibling;
    const imgOutput = document.getElementById('imgOutput');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        label.textContent = input.files[0].name;
        
        reader.onload = function(e) {
            previewBox.innerHTML = `
                <span class="current-label" style="background: #28a745;">Preview Baru</span>
                <img src="${e.target.result}" alt="Preview">
            `;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
@endsection