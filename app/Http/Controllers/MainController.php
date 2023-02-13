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

    public function transfer(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'balance' => 'required',
        ]);
        $customer = Customer::find($request->userid);
        $user = Customer::where('admin', '1')->first();
        if ($customer) {
            if ($customer->status == 'Active') {
                if ($user->balance > $request->balance) {
                    $mybalance = $user->balance;
                    $custbalance = $customer->balance;
                    $user->balance = $mybalance - $request->balance;
                    $user->save();
                    $customer->balance = $custbalance + $request->balance;
                    $customer->save();
                    return back()->with('success', $request->balance . '$ Transfered Successfully to ' . $customer->name);
                } else {
                    return back()->with('failed', 'Not Enough Balance');
                }
            } else {
                return back()->with('failed', 'User isn\'t active');
            }
        } else {
            return back()->with('failed', 'User isn\'t found');
        }
    }
}
