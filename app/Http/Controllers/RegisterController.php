<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        
        $active = 'login';
        return view('login/register',['active' => $active]);
    }
}
