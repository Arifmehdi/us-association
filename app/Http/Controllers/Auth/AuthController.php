<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function logView()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('website.auth.login');
    }

    public function regView()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('website.auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'mathcaptcha' => 'required|mathcaptcha', // MathCaptcha validation
        ]);
        

        if(Auth::attempt($request->only('email','password'))){
            return redirect(route('admin.dashboard'));
        }

        return redirect(route('login'))->withError('Login details are not valid !');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed', // 'confirmed' rule expects a 'password_confirmation' field
        ], [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.', // Custom message for password confirmation
        ]);

        // dd($request->all());
        $name = $request->fname .' '. $request->lname;

        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'name' => $name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect(route('admin.dashboard'));
        }

        return redirect(route('register'))->withError('Error');

    }

    public function reset()
    {
        return view('website.auth.reset');
    }
}
