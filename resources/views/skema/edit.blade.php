@extends('layouts.app')

@section('content')
<h2>Edit Skema Sertifikasi</h2>
<div class="card shadow-sm"><div class="card-body">
    <form action="{{ route('skema.update', $skema->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode Skema</label>
            <input type="text" name="kode_skema" class="form-control @error('kode_skema') is-invalid @enderror" value="{{ old('kode_skema', $skema->kode_skema) }}" required>
            @error('kode_skema') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Nama Skema</label>
            <input type="text" name="nama_skema" class="form-control @error('nama_skema') is-invalid @enderror" value="{{ old('nama_skema', $skema->nama_skema) }}" required>
            @error('nama_skema') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Jenis</label>
            <select name="jenis" class="form-control @error('jenis') is-invalid @enderror" required>
                <option value="">Pilih Jenis</option>
                <option value="KKNI" {{ old('jenis', $skema->jenis) == 'KKNI' ? 'selected' : '' }}>KKNI</option>
                <option value="Okupasi" {{ old('jenis', $skema->jenis) == 'Okupasi' ? 'selected' : '' }}>Okupasi</option>
                <option value="Klaster" {{ old('jenis', $skema->jenis) == 'Klaster' ? 'selected' : '' }}>Klaster</option>
            </select>
            @error('jenis') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('skema.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div></div>
@endsection
