<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {

        //dd($request->all());
        $credentials = $request->validate([
            'npp' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            //return Redirect::back()->with(['warning' => 'Username / Password Salah']);
        }
    }
}
