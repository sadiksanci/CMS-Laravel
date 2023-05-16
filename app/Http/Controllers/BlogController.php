<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlog()
    {

        return view('theme-1.layouts.blog.blog-grid');
    }

    public function blogDetail()
    {

        return view('theme-1.layouts.blog.blog-details');
    }
}
