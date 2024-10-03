<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('website.home');
    }

    public function about()
    {
        return view('website.about');
    }

    public function event()
    {
        return view('website.event');
    }

    public function sponsorship()
    {
        return view('website.sponsorship');
    }

    public function membership()
    {
        return view('website.membership');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function blog()
    {
        return view('website.blog');
    }

    public function gallery()
    {
        return view('website.gallery');
    }
}
