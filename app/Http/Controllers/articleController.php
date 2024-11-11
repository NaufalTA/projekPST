<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class articleController extends Controller
{
    public function index(Request $request)
    {

        $articles = Article::Search()->latest()->paginate(8)->withQueryString();
        $tittle = 'Article';

        return view('article.article', compact('articles' , 'tittle'));
    }
    public function show(Article $article)
    {
        return view('article.articleShow', [
            'articles' => $article
        ]);
    }
}
