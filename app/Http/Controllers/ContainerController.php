<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontainerController extends Controller
{
    public function create (){

        return view('create_container');

    }
}
