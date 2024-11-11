<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Redirect;

class articleDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $articles = Article::search()->latest()->paginate(10)->withQueryString();

        return view('dashboard.articles.indexArticle', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $articles = Article::all();

        return view('dashboard.articles.createArticle', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png|max:5000',
            'tittle' => 'required|min:5|unique:articles,tittle',
            'content' => 'required|min:10',
        ]);

        if ($request->hasFile('image')) {

            //upload file gambar ke folder storage 
            $image = $request->file('image');
            $image->storeAs('public/article', $image->hashName());

            //meng-update data baru
            Article::create([
                'image' => $image->hashName(),
                'tittle' => $request->tittle,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
                'uploaded_by' => auth()->user()->username
            ]);
        } else {
            Article::create([
                'tittle' => $request->tittle,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
                'uploaded_by' => auth()->user()->username
            ]);
        }

        return redirect('/companyDashboard/articles')->with('create', 'Article berhasil di upload!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {

        $articles = $article;

        return view('dashboard.articles.showArticle', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $articles = $article;

        return view('dashboard.articles.editArticle', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png|max:5000',
            'tittle' => 'required|min:5|unique:articles,tittle,' . $article->id,
            'content' => 'required|min:10',
        ]);


        //Cek apakah user upload gambar baru
        if ($request->hasFile('image')) {

            //upload file gambar ke folder storage 
            $image = $request->file('image');
            $image->storeAs('public/article', $image->hashName());

            //menghapus file gambar yang lama
            Storage::delete('public/article/' . $article->image);

            //meng-update data baru
            $article->update([
                'image' => $image->hashName(),
                'tittle' => $request->tittle,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            $article->update([
                'tittle' => $request->tittle,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
            ]);
        }

        return redirect('/companyDashboard/articles')->with('update', 'Article berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/companyDashboard/articles')->with('delete', 'Article berhasil dihapus ');
    }

    public function trash()
    {

        $articles = Article::onlyTrashed()->get();

        return view('dashboard.articles.trashArticle', compact('articles'));
    }

    public function action(Request $request)
    {
        
        $action = $request->input('action');
        $dataIds = $request->input('select');
        
        if ($dataIds) {
            
            $articles = Article::onlyTrashed()->whereIn('id', $dataIds)->get();

            if ($action == 'delete') {
                
                Article::whereIn('id', $dataIds)->forceDelete();

                foreach ($articles as $article) {
                    if ($article->image) {
                        Storage::delete('/public/article/' . $article->image);
                    }
                }
                return redirect('/companyDashboard/articles')->with('deletePerma', 'Data berhasil di hapus secara permanent');

            } elseif ($action == 'restore') {

                Article::withTrashed()->whereIn('id', $dataIds)->restore();
                return redirect('/companyDashboard/articles')->with('restore', 'Data berhasil dipulihkan');
            }



        } else {
            return back()->with('error', 'Pilih data terlebih dahulu');
        }


    }
}
