<?php

namespace App\Http\Controllers;


class pageController extends Controller
{

    public function about()
    {
        return view('mainPage.about');
    }

    public function homepage()
    {
        return view('mainPage.homepage');
    }

    public function contact()
    {
        return view('mainPage.contact');
    }

    public function service()
    {
        return view('mainPage.service');
    }
}

