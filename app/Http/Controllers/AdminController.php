<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['admin_login', 'post_admin_login']);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function admin_login()
    {
        return view('admin.login');
    }

    public function post_admin_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
