<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class adminDashboardController extends Controller
{

    public function index()
    {
        $users = User::where('role', 'admin')->paginate(8);
        $title = 'ADMIN';

        return view('dashboard.usersAdmin.adminIndex', compact('users', 'title'));
    }

    public function show(User $user)
    {
        return view('dashboard.usersAdmin.adminShow', compact('user'));
    }

    public function destroy(User $user)
    {
        if (Auth::user()->role == 'admin') {
            $user->delete();

            if ($user->image) {
                Storage::delete('/public/profil/' . $user->image);
            }

            return back()->with('success', 'Akun berhasil di hapus!');
        }
        return back();
    }


}
