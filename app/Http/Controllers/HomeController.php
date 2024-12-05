<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Trả về view 'home' (resources/views/home.blade.php)
        return view('home');
    }
}
