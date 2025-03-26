<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            // Cek apakah ini redirect pertama kali (flash session masih kosong)
            if (!session()->has('success')) {
                return redirect()->route('dashboard')->with('success', 'Login Admin Berhasil!');
            }
            return view('dashboard.index');
        }

        return redirect('/home')->with('success', 'Login Berhasil!');
    }
}
