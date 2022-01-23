<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        $active = 'login';
        return view('login/login',['active' => $active]);
    }
    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email:dns|',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            // jika auth berhasil maka , intended berarti sebelum login maka melakukan auth middleware terlebih dahulu
            return redirect()->intended('/blog');
        }

        // jika auth gagal
        return back()->with('loginError','Login Failed');
    }

}
