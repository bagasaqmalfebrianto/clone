<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

    $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     if(auth()->user()->is_admin){

                // return redirect('/dashboard');
        //     }
        // }
        //  return back()->withErrors(['username' => 'username atau password salah']);

        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->is_admin){

                return redirect('/dashboard');
            }
        }
        return back();

    }
}
