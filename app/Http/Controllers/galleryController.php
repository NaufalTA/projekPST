<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function index()
    {

        $galleries = Gallery::latest()->paginate(12);

        return view('gallery.gallery', compact('galleries'));
    }
}
