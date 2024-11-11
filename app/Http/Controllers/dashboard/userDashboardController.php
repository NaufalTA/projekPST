<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class userDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::search()->where('role', 'user')->latest()->paginate(10)->withQueryString();
        $title = 'USER';

        return view('dashboard.users.userIndex', compact('users', 'title'));
    }

    public function show(User $user)
    {
        return view('dashboard.users.userShow', compact('user'));
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

    public function trash()
    {

        $users = User::onlyTrashed()->get();

        return view('dashboard.users.userTrash', compact('users'));

    }

    public function action(Request $request)
    {

        $action = $request->input('action');
        $dataIds = $request->input('select');

        if ($dataIds) {

            $users = User::onlyTrashed()->whereIn('id', $dataIds)->get();

            if ($action == 'delete') {

                User::onlyTrashed()->where('id',$dataIds)->forceDelete();

                foreach ($users as $user) {
                    if ($user->image) {
                        Storage::delete('/public/profil/' . $user->image);
                    }
                }

                return redirect('/companyDashboard/users')->with('deletePerma', 'Data telah berhasil di hapus!');
            }

            if ($action == 'restore') {

                User::onlyTrashed()->whereIn('id', $dataIds)->restore();
                return redirect('/companyDashboard/users')->with('restore', 'Data berhasil di pulihkan!');

            }

        } else {

            return back()->with('error', 'Pilih data terlebih dahulu!');

        }

    }

}
