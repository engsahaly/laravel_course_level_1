<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about()
    {
        return view('theme.about');
    }

    public function services()
    {
        return view('theme.services');
    }

    public function contact()
    {
        return view('theme.contact');
    }
}
