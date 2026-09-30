@extends('layouts.app')

@section('content')
<h2>Tambah Skema Sertifikasi</h2>
<div class="card shadow-sm"><div class="card-body">
    <form action="{{ route('skema.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode Skema</label>
            <input type="text" name="kode_skema" class="form-control @error('kode_skema') is-invalid @enderror" value="{{ old('kode_skema') }}" required>
            @error('kode_skema') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Nama Skema</label>
            <input type="text" name="nama_skema" class="form-control @error('nama_skema') is-invalid @enderror" value="{{ old('nama_skema') }}" required>
            @error('nama_skema') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Jenis</label>
            <select name="jenis" class="form-control @error('jenis') is-invalid @enderror" required>
                <option value="">Pilih Jenis</option>
                <option value="KKNI">KKNI</option>
                <option value="Okupasi">Okupasi</option>
                <option value="Klaster">Klaster</option>
            </select>
            @error('jenis') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('skema.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div></div>
@endsection
