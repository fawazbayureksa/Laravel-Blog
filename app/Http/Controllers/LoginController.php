<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        $active = 'login';
        return view('login/login',['active' => $active]);
    }

}
