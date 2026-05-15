@extends('cms.layouts.app')

@section('content')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Tambah Jadwal Dokter</h1>
    </div>
    <div class="col-sm-6">
        <a href="{{ route('admin.jadwal_dokter.index') }}" class="btn btn-secondary float-right">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Jadwal Dokter Baru</h3>
    </div>
    <form action="{{ route('admin.jadwal_dokter.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="id_doctors">Dokter</label>
                <select id="id_doctors" name="id_doctors" class="form-control @error('id_doctors') is-invalid @enderror" required>
                    <option value="">Pilih Dokter</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}" {{ old('id_doctors') == $doctor->id ? 'selected' : '' }}>{{ $doctor->name }}</option>
                    @endforeach
                </select>
                @error('id_doctors')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="FMJShift">Shift</label>
                <input type="text" id="FMJShift" name="FMJShift" class="form-control @error('FMJShift') is-invalid @enderror" value="{{ old('FMJShift') }}" required>
                @error('FMJShift')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            @php
            $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
            $fields = ['FMJHari01', 'FMJHari02', 'FMJHari03', 'FMJHari04', 'FMJHari05', 'FMJHari06', 'FMJHari07'];
            @endphp

            @foreach ($days as $index => $day)
                <div class="form-group">
                    <label for="{{ $fields[$index] }}">{{ $day }}</label>
                    <input type="text" id="{{ $fields[$index] }}" name="{{ $fields[$index] }}" class="form-control @error($fields[$index]) is-invalid @enderror" value="{{ old($fields[$index]) }}">
                    @error($fields[$index])
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            @endforeach

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan
            </button>
            <a href="{{ route('admin.jadwal_dokter.index') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection
