<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class HomePageController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
