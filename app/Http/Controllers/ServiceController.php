<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function getService():View
    {
        return view('theme-1.layouts.services.services');
    }

    public function serviceDetail():View
    {
        return view('theme-1.layouts.services.service-details');
    }
}
