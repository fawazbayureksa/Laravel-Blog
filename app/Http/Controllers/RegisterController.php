<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function index()
    {
        
        $active = 'login';
        return view('login/register',['active' => $active]);
    }

    public function store(Request $request){
    // return $request->all();
    $validated = $request->validate([
        'name' => 'required|max:255',
        'username' => ['required','min:3','max:255','unique:users'], //atau dengan tampilan array
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:8|max:255'
    ]);
    
    // enkripsi password
    $validated['password'] = Hash::make($validated['password']);
    // atau dengan bcrypt
    // $validated['password'] = bcrypt($validated['password']);

    User::create($validated);
    // untuk memanggil session jika berhasil registrasi
    // $request->session()->flash('status', 'Registration successfull');
    // atau dengan cara simple
    return redirect('/login')->with('status', 'Registration successfull');
    }
}
