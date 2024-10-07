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

    public function membership_form(Request $request)
    {

        $validatedData = $request->validate([
            'register_name' => 'required|string|max:255',
            'register_email' => 'required|email',
            'register_address' => 'nullable|string|max:255',
            'register_city' => 'nullable|string|max:255',
            'register_state' => 'nullable|string|max:255',
            'register_zip_code' => 'nullable|string|max:10',
            'register_company_name' => 'nullable|string|max:255',
            'register_store_phone' => 'nullable|string|max:20',
            'register_cell_phone' => 'nullable|string|max:20',
            'business_type' => 'required|array',
            'register_num_store' => 'nullable|integer|min:0',
            'terms' => 'nullable',
            'mathcaptcha' => 'required|mathcaptcha',
        ]);
        dd($validatedData);
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
