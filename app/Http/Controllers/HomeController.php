<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index():View
    {
        return view('theme-1.index');
    }
    public function aboutUs():View
    {

        return view('theme-1.about-us');
    }
    public function contact():View
    {

        return view('theme-1.contact');
    }

    public function changeLang(Request $request)
    {
        if (Session::get('lang'))
        {
            Session::forget('lang');
        }
        Session::put('lang',request()->lang);


    }
}
