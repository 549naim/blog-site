<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function single_blog($name, $id)
    {
        return view('front.single_blog');
    }

    public function category($id)
    {
        return view('front.category');
    }

    public function contact()
    {
        return view('front.contact');
    }

}
