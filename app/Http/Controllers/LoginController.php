<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $validForm = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('siswa')->attempt($validForm)){
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }

        return back()->with('danger', 'Pengguna tidak ditemukan');
    }

    public function logout(Request $request){
        Auth::guard('siswa')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
