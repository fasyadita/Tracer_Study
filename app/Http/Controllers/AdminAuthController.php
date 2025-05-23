<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminAuthController extends Controller
{
    /**
     * Menangani proses login admin
     */
    public function login(Request $request)
    {
        // Validasi input username dan password
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // Cek apakah kredensial benar
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            // Jika login berhasil, alihkan ke dashboard
            return redirect()->route('admin.template');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['username' => 'Kredensial tidak valid']);
    }

    /**
     * Dashboard admin setelah login berhasil
     */
    public function dashboard()
    {
        return view('admin.template');
    }
}
