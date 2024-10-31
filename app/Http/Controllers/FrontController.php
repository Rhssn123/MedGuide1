<?php

namespace App\Http\Controllers;

use App\Models\KategoriPenyakit;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;
use Auth;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        return view('front');
    }

    public function indexU()
    {
        $userId = session('idpengguna')['idpengguna'] ?? null;
        $pengguna = Pengguna::find($userId);
        
        // Pastikan $pengguna tidak null
        if (!$pengguna) {
            return redirect('/')->with('error', 'Pengguna tidak ditemukan');
        }

        return view('dashU', ['penggunas' => [$pengguna]]);
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
    
    /*public function store(Request $request)
    {
        $data = $request->validate([
            'pelanggan' => "required",
            'alamat' => "required",
            'telp' => "required",
            'jeniskelamin' => "required",
            'email' => "required | email | unique:penggunas",
            'password' => "required |min:3",

        ]);

        Pengguna::create([
            'pelanggan' => $data['required'],
            'jeniskelamin' => $data['jeniskelamin'],
            'alamat' => $data['alamat'],
            'telp' => $data['telp'],
            'email' => $data['email'], 
            'password' => Hash::make($data['password'])
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */

     public function store(StorePenggunaRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'pengguna' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        Pengguna::create([
            'pengguna' => $validatedData['pengguna'],
            'jeniskelamin' => $validatedData['jeniskelamin'],
            'alamat' => $validatedData['alamat'],
            'telp' => $validatedData['telp'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'aktif' => true,
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/dashU')->with('success', 'Data berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idpengguna)
    {
        $penggunas = Pengguna::find($idpengguna);
        return view('dashUedit', ['penggunas' => $penggunas]);
    }

    public function editUp()
    {
        $pengguna = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('dashUupdate', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenggunaRequest $request, string $idpengguna)
    {
        $data = $request->validate([
            'nama' => "required",
            'alamat' => "required",
            'telepon' => "required",
            'jenis_kelamin' => "required",
            'email' => "required|email",
            'password' => "nullable|min:3",
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $idpengguna = Pengguna::find($request->id); // Mencari pengguna berdasarkan ID

        // Perbarui data pengguna
        $idpengguna->nama = $data['nama'];
        $idpengguna->alamat = $data['alamat'];
        $idpengguna->telepon = $data['telepon'];
        $idpengguna->jenis_kelamin = $data['jenis_kelamin'];
        $idpengguna->email = $data['email'];

        // Perbarui password jika diisi
        if ($request->password) {
            $idpengguna->password = Hash::make($data['password']);
        }

        $idpengguna->save(); // Simpan perubahan

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }

    /*public function update(UpdatePenggunaRequest $request, Pengguna $idpengguna)
    {
        $idpengguna = Auth::user();

        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $validatedData = $request->validate([
            'pengguna' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:3',
        ]);

        // Update data kategori penyakit berdasarkan ID
        $idpengguna->update([
            'pengguna' => $validatedData['pengguna'],
            'jeniskelamin' => $validatedData['jeniskelamin'],
            'alamat' => $validatedData['alamat'],
            'telp' => $validatedData['telp'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'aktif' => $validatedData['aktif'],
        ]);
        if ($request->password) {
            $idpengguna->password = bcrypt($request->password);
        }

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/profile_images'), $filename);
            $idpengguna->profile_image = $filename;
        }

        $idpengguna->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }*/

    public function updateProfileImage(Request $request)
    {
        $userId = session('idpengguna')['idpengguna'];
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pengguna = Pengguna::find($userId);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $pengguna->gambar = $imagePath;
        }

        $pengguna->save();

        return redirect('dashU')->with('success', 'Gambar berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(string $id)
    {
        //
    }

    public function showEditForm()
    {
        $penggunas = Pengguna::all();
        return view('dashUedit', ['penggunas' => $penggunas]);
    }

    public function showProfile()
    {
       $userId = null;
       $idpenggunaSession = session('idpengguna');
       if ($idpenggunaSession && isset($idpenggunaSession['idpengguna'])) {
           $userId = $idpenggunaSession['idpengguna'];
       }
       
        $pengguna = Pengguna::find($userId);
    
        return view('dashU', ['penggunas' => [$pengguna]]);
    }     

    public function login(Request $request)
    {
        $data = $request -> validate([
            'email' => 'required',
            'password' => 'required|min:3',
        ]);

        $pengguna = Pengguna::where('email', $data)->first();

        if($pengguna) {
            if (Hash::check($data['password'],$pengguna['password'])) {
                $data = [
                    'idpengguna' => $pengguna['idpengguna'],
                    'email' => $pengguna['email'],
                ];

                $request->session()->put('idpengguna', $data);
                return redirect('/loginuser');
            } else {
                return back()->with('salah', 'password salah !');
            }

        }else{
           return back()->with('pesan', 'Email belum terdaftar');
        }
    }

    public function logout()
    {
        session()->flush();
        return view('/');
    }

    public function register()
    {
        $registers = Pengguna::all();
        return view('register', ['registers' => $registers]);
    }

    public function searchUser(Request $request)
    {
        $query = $request->input('query');
        $penggunas = Pengguna::where('pengguna', 'LIKE', "%{$query}%")
                        ->orWhere('alamat', 'LIKE', "%{$query}%")
                        ->orWhere('telp', 'LIKE', "%{$query}%")
                        ->orWhere('jeniskelamin', 'LIKE', "%{$query}%")
                        ->orWhere('email', 'LIKE', "%{$query}%")
                        ->get();

        return view('partials.searchResults', compact('penggunas'))->render();
    }

    public function searchUserAutocomplete(Request $request)
    {
        $query = $request->input('query');
        $penggunas = Pengguna::where('pengguna', 'LIKE', "%{$query}%")
                            ->orWhere('alamat', 'LIKE', "%{$query}%")
                            ->orWhere('telp', 'LIKE', "%{$query}%")
                            ->orWhere('jeniskelamin', 'LIKE', "%{$query}%")
                            ->orWhere('email', 'LIKE', "%{$query}%")
                            ->get(['pengguna', 'alamat', 'telp', 'jeniskelamin', 'email']);

        return response()->json($penggunas);
    }


    public function products()
    {
        return view('products');
    }

    public function tableproducts()
    {
        return view('tableproducts');
    }

    public function form()
    {
        return view('form');
    }

    public function loginuser()
    {
        return view('loginuser');
    }

    public function dashU()
    {
        return view('dashU');
    }
    

    public function dashUedit($idpengguna)
    {
       // Ambil data pengguna yang akan diedit dari database
    $idpengguna = Pengguna::find($idpengguna); // Misalnya, mengambil berdasarkan ID atau sesuai kebutuhan

    // Kemudian kirimkan data pengguna ke tampilan dashUedit.blade.php
    return view('dashUedit', compact('pengguna'));
    }

    public function saveU()
    {
        return view('saveU');
    }

    public function saveUedit()
    {
        return view('saveUedit');
    }

    public function halPenyakit()
    {
        return view('halPenyakit');
    }

    public function riwayatU()
    {
        return view('riwayatU');
    }

    public function apotekU()
    {
        return view('apotekU');
    }

    public function signoutU()
    {
        return view('signoutU');
    }
    
    public function profileadmin()
    {
        return view('profileadmin');
    }

    public function dashA()
    {
        return view('dashA');
    }

    public function dashAadd()
    {
        return view('dashAadd');
    }

    public function dashAedit()
    {
        return view('dashAedit');
    }

    public function riwayatA()
    {
        return view('riwayatA');
    }

    public function riwayatAadd()
    {
        return view('riwayatAadd');
    }

    public function riwayatAedit()
    {
        return view('riwayatAedit');
    }

    public function apotekA()
    {
        return view('apotekA');
    }

    public function apotekAadd()
    {
        return view('apotekAadd');
    }

    public function apotekAedit()
    {
        return view('apotekAedit');
    }

    public function obatA()
    {
        return view('obatA');
    }

    public function obatAadd()
    {
        return view('obatAadd');
    }

    public function obatAedit()
    {
        return view('obatAedit');
    }

    public function penyakitA()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('penyakitA', ['kategorisp' => $kategorisp]);
    }

    
    public function penyakitAadd()
    {
        return view('penyakitAadd');
    }

    public function penyakitAedit()
    {
        return view('penyakitAedit');
    }

    public function signoutA()
    {
        return view('signoutA');
    }

    public function profileuser()
    {
        return view('profileuser');
    }

    public function kategoriPenyakit()
    {
        return view('kategoriPenyakit');
    }

    public function kategoriObat()
    {
        return view('kategoriObat');
    }


    public function deskObat()
    {
        return view('deskObat');
    }
}
