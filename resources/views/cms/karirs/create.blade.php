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
    .input-group-text-custom {
        background-color: #f8fafc;
        border-color: #e2e8f0;
        color: #64748b;
    }
    textarea.form-control {
        line-height: 1.6;
    }
</style>

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h1 class="h4 mb-0 font-weight-bold text-dark">Tambah Karir</h1>
        <p class="text-muted small mb-0">Publikasikan lowongan pekerjaan baru untuk calon pelamar.</p>
    </div>
    <a href="{{ route('admin.karirs') }}" class="btn btn-sm btn-white border shadow-sm px-3">
        <i class="fas fa-arrow-left mr-1"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger border-0 shadow-sm mb-4">
        <div class="d-flex">
            <i class="fas fa-exclamation-circle mt-1 mr-3"></i>
            <div>
                <span class="font-weight-bold">Terjadi kesalahan input:</span>
                <ul class="mb-0 small mt-1 pl-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<form action="{{ route('admin.karirs.store') }}" method="POST">
    @csrf
    <div class="row">
        {{-- Kolom Kiri: Informasi Pekerjaan --}}
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="form-group mb-4">
                        <label class="form-label-custom">Judul Pekerjaan <span class="text-danger">*</span></label>
                        <input type="text" name="title" value="{{ old('title') }}" 
                               class="form-control border-light-200 @error('title') is-invalid @enderror" 
                               placeholder="Contoh: Perawat Instansi Gawat Darurat" required>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label-custom">Deskripsi Singkat</label>
                        <textarea name="description" rows="3" 
                                  class="form-control border-light-200 @error('description') is-invalid @enderror" 
                                  placeholder="Gambaran umum mengenai posisi ini...">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label-custom">Persyaratan <span class="text-danger">*</span></label>
                        <textarea name="requirements" rows="5" 
                                  class="form-control border-light-200 @error('requirements') is-invalid @enderror" 
                                  placeholder="Gunakan poin-poin untuk daftar persyaratan..." required>{{ old('requirements') }}</textarea>
                    </div>

                    <div class="form-group mb-0">
                        <label class="form-label-custom">Tanggung Jawab <span class="text-danger">*</span></label>
                        <textarea name="responsibilities" rows="5" 
                                  class="form-control border-light-200 @error('responsibilities') is-invalid @enderror" 
                                  placeholder="Apa saja tugas harian untuk posisi ini?" required>{{ old('responsibilities') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom Kanan: Atribut & Status --}}
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="form-group mb-4">
                        <label class="form-label-custom">Lokasi Kerja <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-custom"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" name="location" value="{{ old('location') }}" 
                                   class="form-control border-light-200 @error('location') is-invalid @enderror" 
                                   placeholder="Contoh: Jakarta Pusat" required>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label-custom">Batas Akhir Lamaran <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-custom"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" name="application_deadline" value="{{ old('application_deadline') }}" 
                                   class="form-control border-light-200 @error('application_deadline') is-invalid @enderror" required>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label-custom">Status Lowongan</label>
                        <select name="status" class="form-control border-light-200 custom-select @error('status') is-invalid @enderror" required>
                            <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Aktif (Tampilkan)</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Tidak Aktif (Arsip)</option>
                        </select>
                    </div>

                    <hr class="my-4">

                    <button type="submit" class="btn btn-primary btn-block shadow-sm py-2">
                        <i class="fas fa-paper-plane mr-1"></i> Publikasikan Karir
                    </button>
                    <a href="{{ route('admin.karirs') }}" class="btn btn-link btn-block text-muted small">Batal & Keluar</a>
                </div>
            </div>

            <div class="alert alert-light border small text-muted p-3">
                <i class="fas fa-info-circle mr-1 text-primary"></i> 
                Pastikan deskripsi dan persyaratan sudah jelas untuk mempermudah proses seleksi kandidat.
            </div>
        </div>
    </div>
</form>
@endsection