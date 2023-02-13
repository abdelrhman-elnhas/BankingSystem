<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('Layouts.home');
    }

    public function customers()
    {
        $user = Customer::where('admin', '1')->first();
        $customers = Customer::where('admin', '0')->get();
        return view('Layouts.customers', ['user' => $user, 'customers' => $customers]);
    }
}
