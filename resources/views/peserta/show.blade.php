@extends('layouts.app')

@section('content')
<h2>Detail Data Peserta</h2>
<div class="card shadow-sm"><div class="card-body">
    <table class="table">
        <tr>
            <th width="200">NIK</th>
            <td>{{ $peserta->nik }}</td>
        </tr>
        <tr>
            <th>Nama Peserta</th>
            <td>{{ $peserta->nama_peserta }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $peserta->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $peserta->nomor_telepon }}</td>
        </tr>
        <tr>
            <th>Skema Sertifikasi</th>
            <td>{{ $peserta->skema->kode_skema }} - {{ $peserta->skema->nama_skema }} ({{ $peserta->skema->jenis }})</td>
        </tr>
    </table>
    <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Kembali</a>
</div></div>
@endsection
