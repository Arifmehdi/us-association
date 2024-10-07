<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'register_email' => 'required|email|unique:users,email',
            'register_dba' => 'required|string|max:255',
            'register_address' => 'nullable|string|max:255',
            'register_city' => 'nullable|string|max:255',
            'register_state' => 'nullable|string|max:255',
            'register_zip_code' => 'nullable|string|max:10',
            'register_company_name' => 'nullable|string|max:255',
            'register_store_phone' => 'nullable|string|max:20',
            'register_store_fax' => 'nullable|string|max:100',
            'register_cell_phone' => 'nullable|string|max:20',
            'register_cell_phone_carrier' => 'nullable|string',
            'business_type' => 'required|array',
            'register_num_store' => 'nullable|integer|min:0',
            'terms' => 'nullable',
            'mathcaptcha' => 'required|mathcaptcha',
        ]);

        $user = new User();
        $user->name = $request->register_name;
        $user->email = $request->register_email;
        $user->password = Hash::make('Test@12345');
        $user->save();
        $userId = $user->id;
        

        $member = New Members();
        $member->member_id  = $userId;
        $member->name  = $request->register_name;
        $member->email  = $request->register_email;
        $member->dba  = $request->register_dba;
        $member->address  = $request->register_address;
        $member->city  = $request->register_city;
        $member->state  = $request->register_state;
        $member->zip  = $request->register_zip_code;
        $member->company  = $request->register_company_name;
        $member->store_phone  = $request->register_store_phone;
        $member->store_fax  = $request->register_store_fax;
        $member->cell_phone  = $request->register_cell_phone;
        $member->cell_carrier  = $request->register_cell_phone_carrier;
        $member->business_type  = json_encode($request->business_type);
        $member->number_of_store  = $request->register_num_store;
        $member->save();

         
         return redirect()->back()->with('success', 'Member registered successfully!');
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
