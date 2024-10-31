<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRiwayatRequest;
use App\Http\Requests\UpdateRiwayatRequest;
use App\Models\Riwayat;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayats = Riwayat::all();
        return view('riwayatA', ['riwayats' => $riwayats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRiwayatRequest $request)
    {
        \Log::info('Store Request:', $request->all());

        // Validasi data input
        $validatedData = $request->validate([
            'idobat' => 'required',
            'kategoriobat' => 'required',
            'nama' => 'required',
            'stok' => 'required',
        ]);

        \Log::info('Validated Data:', $validatedData);

        Riwayat::create([
            'idobat' => $validatedData['idobat'],
            'kategoriobat' => $validatedData['kategoriobat'],
            'nama' => $validatedData['nama'],
            'stok' => $validatedData['stok'],
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/riwayatA')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Riwayat $riwayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Riwayat $idpengguna)
    {
        $riwayats = Riwayat::find($idpengguna);
        return view('riwayatA', ['riwayats' => $riwayats]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiwayatRequest $request, Riwayat $idpengguna)
    {
        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $validatedData = $request->validate([
            'idobat' => 'required',
            'kategoriobat' => 'required',
            'nama' => 'required',
            'stok' => 'required',
        ]);

        // Update data kategori penyakit berdasarkan ID
        $idpengguna->update([
            'idobat' => $validatedData['idobat'],
            'kategoriobat' => $validatedData['kategoriobat'],
            'nama' => $validatedData['nama'],
            'stok' => $validatedData['stok'],
        ]);
            return redirect('/riwayatA')->with('success', 'Riwayat berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riwayat $idpengguna)
    {
        $riwayat = Riwayat::findOrFail($idpengguna);
        $riwayat->delete();
        return redirect('/riwayatA');
    }

    public function showAddForm()
    {
        $riwayats = Riwayat::all();
        return view('riwayatAadd', ['riwayats' => $riwayats]);
    }

    public function showEditForm()
    {
        $riwayats = Riwayat::all();
        return view('riwayatAedit', ['riwayats' => $riwayats]);
    }
}
