<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'Login'
        ]);
    }

    public function authenticate(Request $request){
        try {
            $credentials = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                if (auth()->user()->is_admin) {
                    return redirect()->intended('/RingkasanPolisAdmin')->with('success', 'Login berhasil');
                }

                return redirect()->intended('/RingkasanPolisUser')->with('success', 'Login berhasil');
            }

            // Flash pesan kesalahan ke session
            Session::flash('loginError', 'Email atau password tidak valid');

            return back();
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');

       }
}
