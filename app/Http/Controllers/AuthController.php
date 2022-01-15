<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request) {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role == 0) {
                // dd($request->all());
                return redirect()->intended('/admin/dashboard');
            } 
            return Redirect::to("/admin")->withErrors('Login Gagal! Username Atau Password Salah');
        }
        return Redirect::to("/admin")->withErrors('Login Gagal! Username Atau Password Salah');
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/admin');
    }
}
