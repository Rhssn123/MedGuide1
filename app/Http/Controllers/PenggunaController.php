<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('dashA', ['penggunas' => $penggunas]);
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
    public function storeRegister(StorePenggunaRequest $request)
    {
        $data = $request->validate([
            'pengguna' => "required",
            'alamat' => "required",
            'telp' => "required",
            'jeniskelamin' => "required",
            'email' => "required | email | unique:penggunas",
            'password' => "required |min:3",

        ]);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
        }

        $pengguna = Pengguna::create([
            'pengguna' => $data['pengguna'],
            'jeniskelamin' => $data['jeniskelamin'],
            'alamat' => $data['alamat'],
            'telp' => $data['telp'],
            'email' => $data['email'], 
            'password' => Hash::make($data['password']),
            'aktif' => true,
            
        ]);

        $request->session()->put('idpengguna', [
            'idpengguna' => $pengguna->idpengguna, // Use the correct attribute here
            'email' => $pengguna->email,
        ]);

        return redirect('/halUser');
    }

    /**
     * Display the specified resource.
     */

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

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
        }

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
        return redirect('/dashA')->with('success', 'Data berhasil disimpan.');
    }

    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $idpengguna)
    {
        $penggunas = Pengguna::find($idpengguna);
        return view('dashAedit', ['penggunas' => $penggunas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenggunaRequest $request, Pengguna $idpengguna)
    {
        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $validatedData = $request->validate([
            'pengguna' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        // Update data kategori penyakit berdasarkan ID
        $idpengguna->update([
            'pengguna' => $validatedData['pengguna'],
            'najeniskelaminma' => $validatedData['jeniskelamin'],
            'alamat' => $validatedData['alamat'],
            'telp' => $validatedData['telp'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'aktif' => $validatedData['aktif'],
        ]);

        $pengguna = Pengguna::findOrFail($idpengguna);
        $pengguna->pengguna = $validatedData['pengguna'];
        $pengguna->jeniskelamin = $validatedData['jeniskelamin'];
        $pengguna->alamat = $validatedData['alamat'];
        $pengguna->telp = $validatedData['telp'];
        $pengguna->email = $validatedData['email'];

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $pengguna->image = $imagePath;
        }

        if (!empty($validatedData['password'])) {
            $pengguna->password = Hash::make($validatedData['password']);
        }

        $pengguna->save();

        return redirect('/dashA')->with('success', 'Kategori penyakit berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function updateUser(Request $request)
     {
         $userId = session('idpengguna')['idpengguna'];
     
         $validatedData = $request->validate([
             'pengguna' => 'required|string|max:255',
             'alamat' => 'required|string|max:255',
             'telp' => 'required|string|max:20',
             'jeniskelamin' => 'required|string|max:1',
             'email' => 'required|string|email|max:255',
             'password' => 'nullable|string|min:3',
         ]);
     
         $pengguna = Pengguna::find($userId);
         $pengguna->pengguna = $validatedData['pengguna'];
         $pengguna->alamat = $validatedData['alamat'];
         $pengguna->telp = $validatedData['telp'];
         $pengguna->jeniskelamin = $validatedData['jeniskelamin'];
         $pengguna->email = $validatedData['email'];
     
         if (!empty($validatedData['password'])) {
             $pengguna->password = Hash::make($validatedData['password']);
         }
     
         $pengguna->save();
     
         return redirect('dashU')->with('success', 'Data berhasil diperbarui');
     }

     public function showEditFormUser()
    {
        $userId = session('idpengguna')['idpengguna'];
        $penggunas = Pengguna::find($userId);

        return view('dashUedit', ['pengguna' => $penggunas]);
    }


    public function destroy($idpengguna)
    {
        Pengguna::where('idpengguna','=', $idpengguna)->delete();
        return redirect('dashA');
    }

    public function showAddForm()
    {
        $penggunas = Pengguna::all();
        return view('dashAadd', ['penggunas' => $penggunas]);
    }

    public function showEditForm()
    {
        $penggunas = Pengguna::all();
        return view('dashAedit', ['penggunas' => $penggunas]);
    }


    public function register()
    {
        $kategorisp = Pengguna::all();
        return view('register', ['kategorisp' => $kategorisp]);
    }

    public function loginuser()
    {
        $kategorisp = Pengguna::all();
        return view('loginuser', ['kategorisp' => $kategorisp]);
    }

    public function halUser()
    {
        return view('halUser');
    } 
    
    public function postlogin(Request $request)
    {
        $data = $request -> validate([
            'email' => 'required',
            'password' => 'required|min:3',
        ]);

        // Cek apakah email adalah email admin
        if ($this->isAdminEmail($data['email'])) {
            // Arahkan ke AuthController
            return app(AuthController::class)->postlogin($request);
        }

        $pengguna = Pengguna::where('email', $data)->first();

        if($pengguna) {
            if (Hash::check($data['password'],$pengguna['password'])) {
                $data = [
                    'idpengguna' => $pengguna['idpengguna'],
                    'email' => $pengguna['email'],
                ];

                $request->session()->put('idpengguna', $data);
                return redirect('/halUser');
            } else {
                return back()->with('salah', 'password salah !');
            }

        }else{
           return back()->with('pesan', 'Email belum terdaftar');
        }
    }

    private function isAdminEmail($email)
    {
        return $email === 'admin@gmail.com';
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
