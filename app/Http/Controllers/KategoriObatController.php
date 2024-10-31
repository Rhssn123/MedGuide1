<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriObatRequest;
use App\Http\Requests\UpdateKategoriObatRequest;
use App\Models\KategoriObat;

class KategoriObatController extends Controller
{
    public function index()
    {
        $kategoriso = KategoriObat::all();
        return view('admin.obatA', ['kategoriso' => $kategoriso]);
    }

    public function indexListObat()
    {
        $kategoriso = KategoriObat::all();
        return view('admin.list-obatA', ['kategoriso' => $kategoriso]);
    }

    public function obatADetail($idkategori)
    {
        $kategori = KategoriObat::findOrFail($idkategori);
        return view('obatA.detail', compact('kategori'));
    }

    public function store(StoreKategoriObatRequest $request)
    {
        \Log::info('Store Request:', $request->all());

        // Validasi data input
        $validatedData = $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
        ]);

        \Log::info('Validated Data:', $validatedData);

        KategoriObat::create([
            'kategoriObat' => $validatedData['kategori'],
            'nama' => $validatedData['nama'],
    ]);

    // Redirect kembali ke halaman penyakitA
    return redirect('/admin.obatA')->with('success', 'Data berhasil disimpan.');
}

    public function show(KategoriObat $KategoriObat)
    {
        //
    }

    public function edit($idkategori)
    {
        $kategoriObat = KategoriObat::findOrFail($idkategori);
        if (!$kategoriObat) {
            abort(404);
        }
        return view('admin.obatAedit', ['kategoriObat' => $kategoriObat]);
    }

    public function update(UpdateKategoriObatRequest $request, $idkategori)
    {
        $validatedData = $request->validate([
            'kategoriObat' => 'required',
            'nama' => 'required',
        ]);

        $kategoriObat = KategoriObat::findOrFail($idkategori);
        $kategoriObat->update([
            'kategoriObat' => $validatedData['kategoriObat'],
            'nama' => $validatedData['nama'],
        ]);

        return redirect('/admin.obatA')->with('success', 'Kategori Obat berhasil diperbarui!');
    }

    public function destroy($idkategori)
    {
        KategoriObat::where('idkategori', '=', $idkategori)->delete();
        return redirect('/admin.obatA');
    }

    public function showAddForm()
    {
        $kategoriso = KategoriObat::all();
        return view('admin.obatAadd', ['kategoriso' => $kategoriso]);
    }

    public function showEditForm($idkategori)
    {
        $kategoriso = KategoriObat::findOrFail($idkategori);
        return view('admin.obatAedit', ['kategoriso' => $kategoriso]);
    }
}