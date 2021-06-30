<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

     public function register()
    {
        return view('register');
    }

     public function login()
    {
        return view('login');
    }

    public function securityCode()

    {
        return view('two-factor-verification');
        
    }

    public function dashboard()
    {
        return view('dashboard');
        
    }
}
