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
    public function details()
    {
        return view('website.details');
    }
    public function blog_details()
    {
        return view('website.blog-details');
    }

    public function sponsorship()
    {
        return view('website.sponsorship');
    }

    public function membership()
    {
        return view('website.membership');
    }

    public function vendor()
    {
        return view('website.vendor');
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
