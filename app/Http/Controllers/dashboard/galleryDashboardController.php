<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class galleryDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries = Gallery::search()->latest()->paginate(10)->withQueryString();

        return view('dashboard.galleries.indexGallery', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galleries.createGallery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',
            'tittle' => 'required|min:5|unique:galleries,tittle',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/gallery', $image->hashName());

        //create product
        Gallery::create([
            'image' => $image->hashName(),
            'tittle' => $request->tittle,
            'user_id' => auth()->user()->id,
            'uploaded_by' => auth()->user()->username,
        ]);

        return redirect('/companyDashboard/galleries')->with('create', 'Gallery berhasil di upload!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.galleries.editGallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png|max:5000',
            'tittle' => 'required|min:5|unique:galleries,tittle,'.$gallery->id,
        ]);

        if ($request->hasFile('image')) {
            //upload image
            $image = $request->file('image');
            $image->storeAs('public/gallery', $image->hashName());

            Storage::delete('public/gallery/' . $gallery->image);


            //create product
            $gallery->update([
                'image' => $image->hashName(),
                'tittle' => $request->tittle,
                'uploaded_by' => auth()->user()->username,
            ]);
        } else {
            $gallery->update([
                'image' => $gallery->image,
                'tittle' => $request->tittle,
                'uploaded_by' => auth()->user()->username,
            ]);
        }

        return redirect('/companyDashboard/galleries')->with('update', 'Gallery berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //delete product
        $gallery->delete();

        //redirect to index
        return redirect('/companyDashboard/galleries')->with('delete', 'Gallery berhasil di hapus.');
    }

    public function trash()
    {

        $galleries = Gallery::onlyTrashed()->get();

        return view('dashboard.galleries.trashGallery', compact('galleries'));
    }

    public function action(Request $request)
    {
        $action = $request->input('action');
        $dataIds = $request->input('select');

        if($dataIds){
            $galleries = Gallery::onlyTrashed()->whereIn('id', $dataIds)->get();

            if($action == 'restore'){

                Gallery::whereIn('id', $dataIds)->restore();
                return redirect('/companyDashboard/galleries')->with('restore', 'Data berhasil di pulihkan!');
                
            }

            if($action == 'delete'){

                Gallery::whereIn('id', $dataIds)->forceDelete();

                foreach($galleries as $gallery){
                    Storage::delete('/public/gallery/'. $gallery->image);
                }
                
                return redirect('/companyDashboard/galleries')->with('deletePerma', 'Data berhasil di hapus secara permanent!');
            }



        } else {
            return back()->with('error', 'Pilih data terlebih dahulu!');
        }

    }
}
