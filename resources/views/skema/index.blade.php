@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Skema Sertifikasi</h2>
    <a href="{{ route('skema.create') }}" class="btn btn-primary">Tambah Skema</a>
</div>
<div class="card shadow-sm"><div class="card-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Skema</th>
                <th>Nama Skema</th>
                <th>Jenis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skemas as $index => $skema)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $skema->kode_skema }}</td>
                <td>{{ $skema->nama_skema }}</td>
                <td>{{ $skema->jenis }}</td>
                <td>
                    <a href="{{ route('skema.edit', $skema->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('skema.destroy', $skema->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div></div>
@endsection
