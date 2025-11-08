<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function about()
    {
        return view('about');
    }
    public function book()
    {
        return view('booking');
    }
     public function index()
    {
        return view('index');
    }
    
}
