@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Peserta Sertifikasi</h2>
    <a href="{{ route('peserta.create') }}" class="btn btn-primary">Tambah Peserta</a>
</div>

<form method="GET" action="{{ route('peserta.index') }}" class="input-group mb-3">
    <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan NIK atau Nama Peserta..." value="{{ $search ?? '' }}">
    <button class="btn btn-outline-secondary" type="submit">Cari</button>
</form>

<div class="card shadow-sm"><div class="card-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Peserta</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Skema Sertifikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pesertas as $index => $peserta)
            <tr>
                <td>{{ $pesertas->firstItem() + $index }}</td>
                <td>{{ $peserta->nik }}</td>
                <td>{{ $peserta->nama_peserta }}</td>
                <td>{{ $peserta->jenis_kelamin }}</td>
                <td>{{ $peserta->nomor_telepon }}</td>
                <td>{{ $peserta->skema->nama_skema ?? '-' }}</td>
                <td>
                    <a href="{{ route('peserta.show', $peserta->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
                    <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" class="text-center">Tidak ada data ditemukan.</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $pesertas->withQueryString()->links() }}
</div></div>
@endsection
