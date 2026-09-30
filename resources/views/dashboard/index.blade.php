@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Administrator</h2>
        <p class="text-muted">Selamat datang di Aplikasi Pengelolaan Data Peserta Sertifikasi.</p>
    </div>
    <div class="col-md-6">
        <div class="card text-white bg-primary mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">Total Skema Sertifikasi</h5>
                <h3>{{ $jumlahSkema }}</h3>
                <a href="{{ route('skema.index') }}" class="text-white text-decoration-none">Kelola Skema &rarr;</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-white bg-success mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">Total Peserta Terdaftar</h5>
                <h3>{{ $jumlahPeserta }}</h3>
                <a href="{{ route('peserta.index') }}" class="text-white text-decoration-none">Kelola Peserta &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection
