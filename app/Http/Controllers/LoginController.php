<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        return view('legal');
    }
}
