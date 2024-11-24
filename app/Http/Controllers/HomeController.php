<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function activity()
    {
        return view('home.activity');
    }

    public function gallery()
    {
        return view('home.gallery');
    }
}
