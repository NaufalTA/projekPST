<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class profilController extends Controller
{
    public function index(User $user)
    {
        if (Auth::user() && Auth::user()->username == $user->username) {
            return view('profil.index', compact('user'));
        } else {
            return back();
        }
    }



    public function edit(User $user)
    {
        if (Auth::user() && Auth::user()->username == $user->username) {
            return view('profil.edit', compact('user'));
        } else {
            return back();
        }
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png|max:5000',
            'name' => 'required',
            'username' => 'required|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email:dns,rfc|unique:users,email,' . $user->id,
            'number' => 'min:10|max:13|unique:users,number,' . $user->id
        ]);

        //Cek apakah user upload gambar baru
        if ($request->hasFile('image')) {

            //upload file gambar ke folder storage 
            $image = $request->file('image');
            $image->storeAs('public/profil', $image->hashName());

            //menghapus file gambar yang lama
            Storage::delete('public/profil/' . $user->image);

            //meng-update data baru
            $user->update([
                'image' => $image->hashName(),
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'number' => $request->number,
                'updated_at' => now()
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'number' => $request->number,
                'updated_at' => now()
            ]);
        }

        return redirect('/profil/' . $user->username)->with('update', 'Profil akun berhasil di ubah !');
    }


    public function resetPass(User $user)
    {
        if (Auth::user() && Auth::user()->username == $user->username) {
            return view('profil.resetPassword', compact('user'));
        } else {
            return back();
        }
    }



    public function updatePass(Request $request, User $user)
    {
        $request->validate([
            'oldPass' => 'required',
            'newPass' => 'required',
            'confirmPass' => 'required'
        ]);

        $password = $request->oldPass;

        if (Hash::check($password, $user->password)) {

            $pass = $request->newPass;
            $confirmPass = $request->confirmPass;

            if ($pass == $confirmPass) {

                $user->update([
                    'password' => Hash::make($pass),
                    'updated_at' => now()
                ]);

                return redirect('/profil/' . $user->username)->with('update', 'Password berhasil di ubah !');
            }
            return back()->with('failedConfirm', 'Confirm password does not match.');
        }
        return back()->with('failedUpdate', 'Current password does not match.');
    }

    public function delete(User $user)
    {
        if (Auth::user() && Auth::user()->username == $user->username) {
        return view('profil.deleteAccount', compact('user'));
        } else {
            return back();
        }

    }

    public function destroy(Request $request, User $user)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user->delete();

            return redirect('/')->with('delete', 'Akunmu berhasil di hapus !');
        }
        return back()->with('failed', 'Email / password tidak sesuai');

    }

    public function logout(Request $request, $slug)
    {
        if (Auth::user() && Auth::user()->username == $slug) {

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/')->with('logout', 'Anda Telah Logout');
        } else {
            return redirect('/');
        }
    }



}
