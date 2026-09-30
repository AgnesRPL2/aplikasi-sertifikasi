<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Skema;

class DashboardController extends Controller {
    public function index() {
        $jumlahPeserta = Peserta::count();
        $jumlahSkema = Skema::count();
        return view('dashboard.index', compact('jumlahPeserta', 'jumlahSkema'));
    }
}
