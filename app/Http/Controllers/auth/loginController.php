<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //check remember me
        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt($credentials, $remember)) {
                
            $request->session()->regenerate();

            return redirect('/')->with('login', 'Anda berhasil login!');
        }

        return back()->with('error', 'Username / Password Tidak Sesuai');

    }

    public function logout(Request $request)
    {
        if (Auth::check()) {

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/')->with('logout', 'Anda Telah Logout');
        } 
        else 
        {
            return redirect('/');
        }

    }
}
