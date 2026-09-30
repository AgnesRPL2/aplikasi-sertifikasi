<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Skema;
use Illuminate\Http\Request;

class PesertaController extends Controller {
    public function index(Request $request) {
        $search = $request->input('search');
        $pesertas = Peserta::with('skema')
            ->when($search, function ($query, $search) {
                return $query->where('nama_peserta', 'like', "%{$search}%")
                             ->orWhere('nik', 'like', "%{$search}%");
            })->paginate(10);

        return view('peserta.index', compact('pesertas', 'search'));
    }

    public function create() {
        $skemas = Skema::all();
        return view('peserta.create', compact('skemas'));
    }

    public function store(Request $request) {
        $request->validate([
            'nik' => 'required|unique:pesertas|digits:16',
            'nama_peserta' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
            'skema_id' => 'required|exists:skemas,id',
        ]);

        Peserta::create($request->all());
        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil ditambahkan.');
    }

    public function show(Peserta $peserta) {
        return view('peserta.show', compact('peserta'));
    }

    public function edit(Peserta $peserta) {
        $skemas = Skema::all();
        return view('peserta.edit', compact('peserta', 'skemas'));
    }

    public function update(Request $request, Peserta $peserta) {
        $request->validate([
            'nik' => 'required|digits:16|unique:pesertas,nik,' . $peserta->id,
            'nama_peserta' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
            'skema_id' => 'required|exists:skemas,id',
        ]);

        $peserta->update($request->all());
        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil diperbarui.');
    }

    public function destroy(Peserta $peserta) {
        $peserta->delete();
        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil dihapus.');
    }
}
