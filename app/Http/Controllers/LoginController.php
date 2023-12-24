<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
{
    return view('login');
}

    public function loginUser(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials))
    {
            return redirect('polls');
    }

    return redirect()->back()->withErrors([
        'email' => 'Incorrect email or password'
    ]);
}

    public function logoutUser()
{
    Auth::logout();

    return redirect('/login')->with('message', 'Successfully logged out');
}





}
