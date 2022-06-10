<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirectTo()
        {
            if(Auth::user()->role_as == '1') //1 = Admin Login
            {
                return 'admin/steam';
            }
            elseif(Auth::user()->role_as == '0') // Normal or Default User Login
            {
                return '/';
            }
        }

    protected function authenticated()
        {
            if(Auth::user()->role_as == '1') //1 = Admin Login
            {
                return redirect('admin/steam')->with('status','Welcome to your dashboard');
            }
            elseif(Auth::user()->role_as == '0') // Normal or Default User Login
            {
                return redirect('/')->with('status','Logged in successfully');
            }
        }
}