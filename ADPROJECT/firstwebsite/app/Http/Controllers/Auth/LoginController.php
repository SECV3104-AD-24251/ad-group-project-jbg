<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to log in the user
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home'); // Redirect to the home page after successful login
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

      // Logout user
      public function logout(Request $request)
      {
          Auth::logout();
          $request->session()->invalidate();
          $request->session()->regenerateToken();
  
          return redirect('/');
      }
}

