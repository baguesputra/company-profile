@extends('web.layouts.app')

@section('content')
<style>
/* Hero Section */
.layanan-unggulan-hero {
    position: relative;
    background: url('../public/images/gedung_amc.jpg') no-repeat center center;
    background-size: cover;
    min-height: 300px;
    color: #fff;
    padding: 80px 20px;
}

.layanan-unggulan-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(211, 119, 57, 0.83); /* overlay orange transparan */
}

.layanan-unggulan-hero .container {
    position: relative;
    z-index: 2;
}

.judul-layanan-unggulan {
    font-size: 2.5rem;
    font-weight: 700;
    color :#fff;
}

.deskripsi-layanan-unggulan {
    font-size: 1.2rem;
    margin: 0 auto;
    color: #fff;
}

/* Kritik Saran Section */
.kritik-saran-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    padding: 60px 0;
}

.form-container {
    max-width: 700px;
    margin: 0 auto;
}

.form-card {
    background: #ffffff;
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
}

.form-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #28a745, #20c997);
}

.form-header {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 30px;
    text-align: center;
}

.form-header h3 {
    margin: 0;
    font-weight: 700;
    font-size: 1.8rem;
}

.form-header p {
    margin: 10px 0 0;
    opacity: 0.9;
    font-size: 1rem;
}

.form-body {
    padding: 40px;
}

.form-group {
    margin-bottom: 25px;
    position: relative;
}

.form-label {
    font-weight: 600;
    color: #2a7f62;
    margin-bottom: 8px;
    display: block;
    font-size: 0.95rem;
}

.form-control {
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 12px 16px;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.15);
    background: #ffffff;
    transform: translateY(-1px);
}

.form-control::placeholder {
    color: #6c757d;
    opacity: 0.7;
}

.form-check {
    margin-bottom: 12px;
}

.form-check-input {
    width: 18px;
    height: 18px;
    margin-right: 12px;
    border: 2px solid #28a745;
    background: #ffffff;
    transition: all 0.3s ease;
}

.form-check-input:checked {
    background-color: #28a745;
    border-color: #28a745;
}

.form-check-input:focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.15);
}

.form-check-label {
    color: #495057;
    font-weight: 500;
    cursor: pointer;
    transition: color 0.3s ease;
}

.form-check-label:hover {
    color: #28a745;
}

.form-text {
    font-size: 0.8rem;
    color: #6c757d;
    margin-top: 4px;
}

.btn-submit {
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
    border-radius: 12px;
    padding: 14px 30px;
    font-weight: 600;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: white;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    width: 100%;
}

.btn-submit::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.btn-submit:hover::before {
    left: 100%;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
}

.btn-submit:active {
    transform: translateY(0);
}

.alert {
    border: none;
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 25px;
}

.alert-success {
    background: linear-gradient(135deg, #d4edda, #c3e6cb);
    color: #155724;
    border-left: 4px solid #28a745;
}

.alert-danger {
    background: linear-gradient(135deg, #f8d7da, #f5c6cb);
    color: #721c24;
    border-left: 4px solid #dc3545;
}

.response-info {
    text-align: center;
    margin-top: 40px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 12px;
    border: 1px solid #e9ecef;
}

.response-info p {
    color: #6c757d;
    margin: 0;
    font-size: 0.95rem;
}

@media (max-width: 768px) {
    .form-body {
        padding: 30px 20px;
    }

    .form-header {
        padding: 25px 20px;
    }

    .form-header h3 {
        font-size: 1.5rem;
    }

    .btn-submit {
        padding: 12px 25px;
        font-size: 0.95rem;
    }
}
</style>
<section class="layanan-unggulan-hero">
    <div class="container">
        <h2 class="judul-layanan-unggulan">Kritik dan Saran</h2>
        <p class="deskripsi-layanan-unggulan">
            Kami sangat menghargai masukan Anda untuk meningkatkan pelayanan Rumah Sakit Amanah Medical Centre. Silakan berikan kritik dan saran Anda di bawah ini.
        </p>
    </div>
</section>
<section class="kritik-saran-section py-5">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="form-container">
            <div class="form-card">
                <div class="form-header">
                    <h3>Form Kritik & Saran</h3>
                    <p>Berikan masukan Anda untuk membantu kami berkembang</p>
                </div>
                <div class="form-body">
                    <form action="{{ route('web.kritik_saran.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap Anda" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon') }}" placeholder="081234567890">
                            @error('telepon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Jenis Masukan <span class="text-danger">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input @error('jenis') is-invalid @enderror" type="radio" name="jenis" id="kritik" value="kritik" {{ old('jenis') == 'kritik' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="kritik">
                                    Kritik
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('jenis') is-invalid @enderror" type="radio" name="jenis" id="saran" value="saran" {{ old('jenis') == 'saran' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="saran">
                                    Saran
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('jenis') is-invalid @enderror" type="radio" name="jenis" id="keduanya" value="keduanya" {{ old('jenis') == 'keduanya' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="keduanya">
                                    Kritik dan Saran
                                </label>
                            </div>
                            @error('jenis')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kritik" class="form-label">Kritik</label>
                            <textarea class="form-control @error('kritik') is-invalid @enderror" id="kritik" name="kritik" rows="4" maxlength="1000" placeholder="Jika Anda ingin memberikan kritik, tuliskan di sini...">{{ old('kritik') }}</textarea>
                            <div class="form-text">Maksimal 1000 karakter</div>
                            @error('kritik')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="saran" class="form-label">Saran</label>
                            <textarea class="form-control @error('saran') is-invalid @enderror" id="saran" name="saran" rows="4" maxlength="1000" placeholder="Jika Anda ingin memberikan saran, tuliskan di sini...">{{ old('saran') }}</textarea>
                            <div class="form-text">Maksimal 1000 karakter</div>
                            @error('saran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn-submit">Kirim Masukan</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="response-info">
            <p>Kami berkomitmen untuk merespons semua masukan dalam waktu 3-5 hari kerja.</p>
        </div>
    </div>
</section>
@endsection
