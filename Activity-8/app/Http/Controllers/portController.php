<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function achieve()
    {
        return view('achievements');
    }
}
