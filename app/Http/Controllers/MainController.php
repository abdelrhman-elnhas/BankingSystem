<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('Layouts.home');
    }

    public function customers()
    {
        return view('Layouts.customers');
    }
}
