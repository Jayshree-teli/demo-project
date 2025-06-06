<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
      public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out.');
    }
}
