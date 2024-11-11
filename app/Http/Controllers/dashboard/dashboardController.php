<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {

        $galleries = Gallery::latest()->get();
        $articles = Article::latest()->get();
        $users = User::where('role', 'user')->latest()->get();

        return view('dashboard.home', compact('galleries', 'articles', 'users'));
    }
}
