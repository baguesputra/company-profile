@extends('cms.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Kritik & Saran</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.kritik_sarans') }}" class="btn btn-secondary float-right">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Kritik & Saran #{{ $kritikSaran->id }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-sm-4">Nama:</dt>
                                <dd class="col-sm-8">{{ $kritikSaran->nama }}</dd>

                                <dt class="col-sm-4">Email:</dt>
                                <dd class="col-sm-8">{{ $kritikSaran->email }}</dd>

                                <dt class="col-sm-4">Telepon:</dt>
                                <dd class="col-sm-8">{{ $kritikSaran->telepon ?: '-' }}</dd>

                                <dt class="col-sm-4">Jenis:</dt>
                                <dd class="col-sm-8">
                                    @if($kritikSaran->jenis == 'kritik')
                                        <span class="badge badge-danger">Kritik</span>
                                    @elseif($kritikSaran->jenis == 'saran')
                                        <span class="badge badge-info">Saran</span>
                                    @else
                                        <span class="badge badge-warning">Keduanya</span>
                                    @endif
                                </dd>

                                <dt class="col-sm-4">Status:</dt>
                                <dd class="col-sm-8">
                                    @if($kritikSaran->status == 'pending')
                                        <span class="badge badge-secondary">Pending</span>
                                    @elseif($kritikSaran->status == 'dibaca')
                                        <span class="badge badge-primary">Dibaca</span>
                                    @else
                                        <span class="badge badge-success">Ditanggapi</span>
                                    @endif
                                </dd>

                                <dt class="col-sm-4">Tanggal:</dt>
                                <dd class="col-sm-8">{{ $kritikSaran->created_at->format('d/m/Y H:i') }}</dd>
                            </dl>
                        </div>
                    </div>

                    @if($kritikSaran->kritik)
                        <div class="form-group">
                            <label>Kritik:</label>
                            <div class="alert alert-danger">
                                <p>{{ $kritikSaran->kritik }}</p>
                            </div>
                        </div>
                    @endif

                    @if($kritikSaran->saran)
                        <div class="form-group">
                            <label>Saran:</label>
                            <div class="alert alert-info">
                                <p>{{ $kritikSaran->saran }}</p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <form action="{{ route('admin.kritik_sarans.update_status', $kritikSaran->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <div class="form-group d-inline-block mr-2">
                            <select name="status" class="form-control">
                                <option value="pending" {{ $kritikSaran->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="dibaca" {{ $kritikSaran->status == 'dibaca' ? 'selected' : '' }}>Dibaca</option>
                                <option value="ditanggapi" {{ $kritikSaran->status == 'ditanggapi' ? 'selected' : '' }}>Ditanggapi</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Status
                        </button>
                    </form>

                    <form action="{{ route('admin.kritik_sarans.delete', $kritikSaran->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kritik dan saran ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
