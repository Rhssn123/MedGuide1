<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApotekRequest;
use App\Http\Requests\UpdateApotekRequest;
use App\Models\Apotek;

class ApotekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $namaApotek = Apotek::all();
        return view('apotekA', ['namaApotek' => $namaApotek]);
    }

    public function apotekU()
    {
        $namaApotek = Apotek::all();
        return view('apotekU', ['namaApotek' => $namaApotek]);
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
    public function store(StoreApotekRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'namaapotek' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'gambar' => 'required',
        ]);

        // Simpan gambar
        $imagePath = $request->file('gambar')->store('images', 'public');

        Apotek::create([
            'namaapotek' => $validatedData['namaapotek'],
            'alamat' => $validatedData['alamat'],
            'telp' => $validatedData['telp'],
            'gambar' => $imagePath,
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/apotekA')->with('success', 'Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Apotek $Apotek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idkategori)
    {
        $namaApotek = Apotek::find($idkategori);
        return view('apotekAedit', ['namaApotek' => $namaApotek]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApotekRequest $request, $idkategori)
    {
        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $request->validate([
            'namaapotek' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'telp' => 'required|string|max:15',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $apotek = Apotek::findOrFail($idkategori);
        $apotek->namaapotek = $request->input('namaapotek');
        $apotek->alamat = $request->input('alamat');
        $apotek->telp = $request->input('telp');
    
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $apotek->gambar = $imagePath;
        }
    
        $apotek->save();
        // Tambahkan log
        \Log::info('Data apotek berhasil diperbarui:', ['apotek' => $apotek]);
    
        return redirect('/apotekA')->with('success', 'Data apotek berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idkategori)
    {
        Apotek::where('idkategori','=', $idkategori)->delete();
        return redirect('apotekA');
    }

    public function showAddForm()
    {
        $namaApotek = Apotek::all();
        return view('apotekAadd', ['namaApotek' => $namaApotek]);
    }

    public function showEditForm()
    {
        $namaApotek = Apotek::all();
        return view('apotekAedit', ['namaApotek' => $namaApotek]);
    }
}
