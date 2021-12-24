<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // ini buat nampilin halaman yg tadi (base page)
    public function index ()
    {
        return view('data');
    }
}
