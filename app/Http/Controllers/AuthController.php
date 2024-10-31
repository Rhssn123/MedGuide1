<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return 'login';
    }
    public function postlogin($request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required|min:3',
        ]);

        $data = $request -> only('email','password');

        if (Auth::attempt($data)) {
            $user = Auth::user();
            // Arahkan ke halaman admin berdasarkan level atau role pengguna
            if ($user->level == 'admin') {
                return redirect('/profileadmin');
            } else {
                return redirect('/halUser');
            }
        } else {
            return redirect()->back()->with('pesan', 'Login gagal. Silakan cek email Anda.');
        }

    }
}
