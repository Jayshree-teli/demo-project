<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminController extends Controller
{
      public function showLogin()
    {
        return view('admin.login');
    }

     public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors([
                    'email' => 'You are not authorized as admin.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

     public function dashboard()
    {
        return view('admin.dashboard');
    }

}
