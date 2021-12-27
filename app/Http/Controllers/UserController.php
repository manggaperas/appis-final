<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request) {
        $data = User::all();
        $headings = collect([
            'name' => 'Name',
            'email' => 'Email'
        ]);
        return view('access', compact('data', 'headings'));
    }

    public function create() {
        return view('create_access');
    }
}
