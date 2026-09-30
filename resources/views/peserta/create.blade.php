@extends('layouts.app')

@section('content')
<h2>Tambah Data Peserta</h2>
<div class="card shadow-sm"><div class="card-body">
    <form action="{{ route('peserta.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>NIK (16 Digit)</label>
            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" required maxlength="16">
            @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Nama Peserta</label>
            <input type="text" name="nama_peserta" class="form-control @error('nama_peserta') is-invalid @enderror" value="{{ old('nama_peserta') }}" required>
            @error('nama_peserta') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" value="{{ old('nomor_telepon') }}" required>
            @error('nomor_telepon') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Pilih Skema Sertifikasi</label>
            <select name="skema_id" class="form-control @error('skema_id') is-invalid @enderror" required>
                <option value="">Pilih Skema</option>
                @foreach($skemas as $skema)
                    <option value="{{ $skema->id }}">{{ $skema->kode_skema }} - {{ $skema->nama_skema }}</option>
                @endforeach
            </select>
            @error('skema_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div></div>
@endsection
