<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreKategoriPenyakitRequest;
use App\Http\Requests\UpdateKategoriPenyakitRequest;
use App\Models\KategoriPenyakit;

class KategoriPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('admin.penyakitA', ['kategorisp' => $kategorisp]);
    }

    public function indexListPenyakit()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('admin.list-penyakitA', ['kategorisp' => $kategorisp]);
    }

    // Di dalam controller Anda (misalnya KategoriPenyakitController)

    public function showListPenyakit($idkategori)
    {
        // Ambil ID kategori yang dipilih dari formulir
        $idKategori = $idkategori->input('kategori_penyakit');

        // Dapatkan data penyakit berdasarkan ID kategori yang dipilih
        $penyakit = KategoriPenyakit::where('idkategori', $idKategori)->get();

        // Kembalikan data dalam bentuk respons JSON
        return response()->json($penyakit);
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
     * 
     * 
     */
    public function store(StoreKategoriPenyakitRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
        ]);

        KategoriPenyakit::create([
            'kategori' => $validatedData['kategori'],
            'nama' => $validatedData['nama'],
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/admin.penyakitA')->with('success', 'Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriPenyakit $kategoriPenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idkategori)
    {
        $kategori = KategoriPenyakit::find($idkategori);
        if (!$kategori) {
            abort(404);
        }
        return view('admin.penyakitAedit', ['kategori' => $kategori]);
    }


    /**
     * Update the specified resource in storage.
     */

     public function update(UpdateKategoriPenyakitRequest $request, $idkategori)
    {
        $validatedData = $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
        ]);

        $kategoriPenyakit = KategoriPenyakit::findOrFail($idkategori);
        $kategoriPenyakit->update([
            'kategori' => $validatedData['kategori'],
            'nama' => $validatedData['nama'],
        ]);

        return redirect('/admin.penyakitA')->with('success', 'Kategori penyakit berhasil diperbarui!');
    }
    /**
     * Remove the specified resource from storage.
     */

     
    public function destroy($idkategori)
    {
        KategoriPenyakit::where('idkategori','=', $idkategori)->delete();
        return redirect('admin.penyakitA');
    }

    public function showAddForm()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('admin.penyakitAadd', ['kategorisp' => $kategorisp]);
    }

    public function showEditForm()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('admin.penyakitAedit', ['kategorisp' => $kategorisp]);
    }

}
