<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Trả về file PHP index.php trong thư mục resources/views/home
        return include resource_path('views/home/index.php');
    }
}
